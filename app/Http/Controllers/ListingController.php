<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ListingController extends Controller
{
    //GET


    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['search']))
                ->paginate(3)
        ]);

    }

    /*
     * DEN SORTERAr INTE NYA FILer
     *
     * */
    public function sortByPrice($order)
    {

        return view('listings.index', [
            'listings' => Listing::orderBy('price',$order)
                ->paginate(3)

        ]);

    }


    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create(){
        return view('listings.create'
        );
    }

    public function store(Request $request) {
        // Validate request input
        $formFields = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'pictures' => 'required'
        ]);



        // Convert pictures string to array and then to JSON
        $picturesArr = array_filter(explode(',', $formFields['pictures']), 'strlen');
        $jsonString = json_encode($picturesArr);

        $test_array = array();
        // Store all images
        foreach($request->file('picture') as $imageFile){
            $imageFile->store('images', 'public');
            $test_array[] = $imageFile;
        }

   /*   if ($pictures = $request->hasFile('picture')) {
            // Store the picture and update the 'picture' field in $formFields
            $formFields['picture'] = $request->file('picture')->store('images', 'public');


        }*/
        $bilderstring = json_encode($test_array);

        // Update the 'pictures' field in $formFields with JSON data
        $formFields['pictures'] = $jsonString;
        $formFields['picture'] = $bilderstring;

        // Create a new listing with the updated $formFields
        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully');
    }

    public function destroy(Listing $listing){
            $listing->delete();
            return redirect('/')->with('message','Listing deleted succesfully');
    }


}
