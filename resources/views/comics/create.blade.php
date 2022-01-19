@extends('layouts.app')

@section('content')

    <div class="container mt-2">
        <h1>Insert a new comic</h1>
        <div class="mb-3">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">

                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder=""
                    aria-describedby="helpId">

                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="helpId">

                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId">

                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder=""
                    aria-describedby="helpId">

                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder=""
                    aria-describedby="helpId">

                <label for="type" class="form-label">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="" aria-describedby="helpId">

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

@endsection
