@extends('layouts.app')

@section('content')



    <div class="container my-3">

        <h1>Post</h1>

        <div class="mb-3">
            {{ $post->title }}

        </div>

        <div class="mb-3">
            {{ $post->body }}

        </div>








    </div>






@endsection
