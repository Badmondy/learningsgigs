<x-layout>

    <h1 class="mt-2"> <a href="/"  class="bi-arrow-return-left"> </a></h1>

<form method="post" action="{{url('/listings')}}" class="d-flex justify-content-center align-items-center mt-2 gap-2 align-content-center" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Rubrik/Titel</label>
        <input type="text" class="form-control" name="title" value="{{old('title')}}">
        @error('title')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Pris</label>
        <input type="number" class="form-control" name="price" id="price" value="{{old('price')}}">
        @error('price')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror
    </div>


    <div class="mb-3">
        <label for="pictures"> Bilder </label>
        <input type="text" class="form-control" name="pictures" value="{{old('pictures')}}">
        @error('pictures')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror

    </div>

    <div class="mb-3">
        <label for="picture"> Bilder </label>
        <input required type="file" class="form-control" name="picture[]" multiple>
        @error('picture')
        <p class="text-danger">
            {{$message}}
        </p>
        @enderror

    </div>


    <button type="submit" class="btn btn-primary">Skapa listning</button>
</form>
</x-layout>
