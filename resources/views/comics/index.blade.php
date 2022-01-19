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

                        <div class="card">
                            <a class="text-decoration-none" href="{{ route('comics.show', $comic->id) }}">
                                <img src="{{ $comic->thumb }}" alt="">
                                <h6>{{ $comic->series }}</h6>
                            </a>
                        </div>

                    </div>


                @endforeach
            </div>
            <div class="load">
                <button>
                    <a href="">LOAD MORE</a>
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
