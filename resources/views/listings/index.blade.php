<x-layout>
@include('partials._search')
@include('partials._sortBy')
    @include('partials._sideMenu')

    @if(count($listings) == 0)
        <p>No Listing found</p>
    @endif
    <section class="mt-5">
        <div class="container d-flex flex-column gap-5">


            @foreach($listings as $listing)
                    <?php $pic = json_decode($listing->pictures) ?>
                <a href="/listings/{{$listing->id}}" class="d-flex justify-content-center flex-column text-center card">

                    <div class="card-header bg-warning-subtle "><h1>{{ucfirst($listing->title)}} </h1></div>

                        <div class="card-body bg-light">

                        <h3 class="text-success card-title">{{number_format($listing->price,0,'',' ')}} SEK</h3>

                        <div class="d-flex flex-column flex-md-row gap-2 align-items-center justify-content-center">
                           {{--@foreach($pic as $i)--}}
                            <img src="{{$listing->picture ? asset('storage/' . $listing->picture) : asset('/images/')}}" alt="" width="300px" height="200px" loading="lazy" class="rounded"/>
                     {{-- @endforeach--}}
                        </div>
                        </div>
                </a>
            @endforeach

        </div>
        @include('partials._pagination')
    </section>
</x-layout>

