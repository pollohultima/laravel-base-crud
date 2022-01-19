@extends('layouts.app')

@section('page-title', 'Comic Page')

@section('content')

    <div class="comic">

        <div class="comic_header position-relative">
            <div class="comic_cont ">
                <div class="img_wrapper position-absolute">
                    <div class="comic_label text-white text-uppercase position-absolute px-1">
                        {{-- <span>{{ $comic['type'] }}</span> --}}
                    </div>
                    <img src="{{ $comic->thumb }}" alt="">
                    <div class="view text-center text-white position-absolute">
                        <span>VIEW GALLERY</span>
                    </div>
                </div>
            </div>S
        </div>

        <div class="cmc_info comic_cont position-relative">
            <h1 class="text-uppercase fs-4 mb-4">{{ $comic->title }}</h1>

            <div class="info_wrapper">

                <div class="price_wrapper d-flex align-items-center mb-3">
                    <div class="price d-flex justify-content-between ">
                        <div class="px-3 text-white text-opacity-50">U.S. Price <span
                                class="text-white">{{ $comic->price }}</span>
                        </div>
                        <div class="px-3 text-white text-opacity-50">AVAILABLE</div>
                    </div>
                    <div class="check text-center px-3 text-white">
                        Check Availability <i class="fas fa-chevron-down"></i>
                    </div>
                </div>

                <p class="mb-0">{{ $comic->description }}</p>
            </div>

            <div class="adv position-absolute text-end">
                <span class="fw-bold">ADVERTISEMENT</span>
                <img src="{{ asset('img/ad.jpg') }}" alt="">
            </div>


            <h6>{{ $comic->series }}</h6>
        </div>
        <div class="specs_table border-top">
            <div class="comic_cont">
                <div class="row">
                    <div class="col-6">
                        <h4 class="my-4">Talent</h4>
                        <div class="tab d-flex justifiy-content-between my-3 py-3 border-bottom border-top">
                            <div class="col-4">
                                <h6>Arts by:</h6>
                            </div>

                            <div class="col-8 fs_12 text-end">
                                {{-- @foreach ($comic['artists'] as $artist)

                                    <span class="art_list">{{ $artist }}</span>
                                    @if (!$loop->last)
                                        <span class="text-black">,</span>

                                    @endif
                                @endforeach --}}
                            </div>
                        </div>

                        <div class="tab d-flex justifiy-content-between mb-3 pb-3 border-bottom">
                            <div class="col-4">
                                <h6>Written by:</h6>
                            </div>

                            <div class="col-8 fs_12 text-end">
                                {{-- @foreach ($comic['writers'] as $writer)

                                    <span class="art_list">{{ $writer }}</span>
                                    @if (!$loop->last)
                                        <span class="text-black">,</span>

                                    @endif
                                @endforeach --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <h4 class="my-4">Specs</h4>
                        <div class="tab d-flex justifiy-content-between  py-3 border-bottom border-top">
                            <div class="col-4">
                                <h6>Series:</h6>
                            </div>

                            <div class="col-8 fs_12 text-start">
                                <span class="text-uppercase">{{ $comic->series }}</span>
                            </div>
                        </div>

                        <div class="tab d-flex justifiy-content-between py-3 ">
                            <div class="col-4">
                                <h6>U.S. Price:</h6>
                            </div>

                            <div class="col-8 fs_12 text-start">
                                <span class="text-uppercase text-black">{{ $comic->price }}</span>
                            </div>
                        </div>

                        <div class="tab d-flex justifiy-content-between  py-3 border-bottom border-top">
                            <div class="col-4">
                                <h6>On Sale Date:</h6>
                            </div>

                            <div class="col-8 fs_12 text-start">
                                <span class="text-uppercase text-black">{{-- {{ $comic['sale_date'] }} --}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
