@extends('layouts.admin')

@section('content')

    <div class="container mt-2">
        <h1>Modify Comic</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <form action="{{ route('admin.comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ $comic->title }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" id="description"
                        class="form-control @error('description') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId" value="{{ $comic->description }}">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ $comic->thumb }}">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ $comic->price }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ $comic->series }}">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" name="sale_date" id="sale_date"
                        class="form-control @error('sale_date') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId" value="{{ $comic->sale_date }}">
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">

                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ $comic->type }}">
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mb-3">Save</button>


            </form>
        </div>
    </div>

@endsection
