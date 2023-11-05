<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/boot/test', function(){
    return view('/layouts/app');

});

Route::get('/',
[ListingController::class,'index']);

Route::get('/{order?}',
    [ListingController::class, 'sortByPrice'])
    ->where('order', 'asc|desc');



// Display form
Route::get('/listings/create',
[ListingController::class, 'create']);


// Store listing data
Route::post('/listings',
    [ListingController::class,'store']);

Route::delete('/listings/{listing}',
    [ListingController::class,'destroy']
);

Route::get('listings/{listing}',
    [ListingController::class,'show']);
