@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')

    <div class="comics_content">
        <div class="container">
            <button class="current_series">
                <a href="">CURRENT SERIES</a>
            </button>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 px-0">

                        <div class="card border-0">
                            <a class="text-decoration-none" href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}" alt="">
                                <h6>{{ $comic->series }}</h6>
                            </a>
                        </div>
                        <div class="buttons">
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">View</a>
                            <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $comic->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete{{ $comic->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modal-{{ $comic->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Comic {{ $comic->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p> Are u sure buddy?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                @endforeach
            </div>
            <div class="load">
                <button>
                    <a href="{{ route('comics.create') }}">UPLOAD COMICS</a>
                </button>
            </div>
        </div>

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col5">
                        <div class="icon">
                            <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="" />
                            <p>DIGITAL COMICS</p>
                        </div>
                    </div>
                    <div class="col5">
                        <div class="icon">
                            <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="" />
                            <p>DC MERCHANDISE</p>
                        </div>
                    </div>
                    <div class="col5">
                        <div class="icon">
                            <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="" />
                            <p>SUBSCRIPTION</p>
                        </div>
                    </div>
                    <div class="col5">
                        <div class="icon">
                            <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="" />
                            <p>COMIC SHOP LOCATOR</p>
                        </div>
                    </div>
                    <div class="col5">
                        <div class="icon">
                            <img class="visa" src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="" />
                            <p>DC POWER VISA</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
