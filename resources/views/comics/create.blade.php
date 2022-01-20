@extends('layouts.app')

@section('content')

    <div class="container mt-2">
        <h1>Insert a new comic</h1>


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
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" id="description"
                        class="form-control @error('description') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId" value="{{ old('description') }}">
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ old('thumb') }}">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ old('price') }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ old('series') }}">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" name="sale_date" id="sale_date"
                        class="form-control @error('sale_date') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId" value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>

                <div class="mb-3">

                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ old('type') }}">
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

@endsection
