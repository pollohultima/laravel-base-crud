@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <h1>All Posts in a table</h1>

            <a name="" id="" class="btn btn-primary" href="{{ route('admin.posts.create') }}" role="button">Create</a>

        </div>

        @foreach ($posts as $post)
            <div class="row mb-3">
                <div class="col-1">
                    {{ $post->id }}
                </div>
                <div class="col-2">
                    {{ $post->title }}
                </div>
                <div class="col-7">
                    {{ $post->body }}
                </div>
                <div class="col d-flex flex-column align-items-center justify-content-evenly">
                    <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                    <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">View</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#delete{{ $post->id }}">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-{{ $post->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Comic {{ $post->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p> Are u sure buddy?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
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





    @endsection
