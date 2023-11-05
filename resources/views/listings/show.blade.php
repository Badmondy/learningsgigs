
<x-layout>
<section class="mt-2 overflow-hidden">



        <h1 class="card-header d-flex justify-content-between px-2">
            <a href="/" class="bi-arrow-90deg-left"></a>

            {{$listing->id}}

        </h1>

        <?php $pic = json_decode($listing->pictures) ?>

        <div class="card-body d-flex flex-column">
            <div class="d-flex justify-content-center gap-3">
       {{-- @foreach($pic as $p)

            <img src="{{$p}}" alt="" loading="lazy" class="img-fluid img-thumbnail w-25 ">


        @endforeach--}}
            </div>

            <div class="container w-75 mt-5 text-start">
                <h3 class="text-success mt-3">{{number_format($listing->price,0,'',' ')}} SEK</h3>
                <p class="text-secondary">
                    I ett insynsskyddat läge på lugn återvändsgata ges nu tillfälle att förvärva detta härliga hem fyllt av karaktär. Med sina 5 sovrum passar huset såväl den större familjen eller den som önskar hyra ut delar av fastigheten. Många av de tråkiga renoveringsmåstena är gjorda, så som tak, kök, golv, badrum, relining och viss dränering. Utöver den stora trädgården, den gulliga friggeboden med sedumtak samt dubbelgaraget med elbilsladdning så bjuder huset på unika detaljer så som teakfönster, marmorgolv samt en två meter stor öppen spis. Här bor du i ett lugnt område med närhet till hav och natur. Välkommen!
                </p>
                <form method="POST" action="/listings/{{$listing->id}}">

                    @csrf
                    @method('DELETE')
                    <button class="text-danger bi-x-circle">Delete listing</button>

                </form>
            </div>


        </div>





</section>
</x-layout>
