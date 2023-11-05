@if(session()->has('message') )


    <div class="position-fixed top-0 text-center bg-danger text-light px-2 py-2 justify-content-center">

        <p>{{session('message')}}</p>
    </div>





@endif
