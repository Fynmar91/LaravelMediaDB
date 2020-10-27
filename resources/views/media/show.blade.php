@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>{{ $media->title }}</h1>
            </div>
            <div class="row">
                <h2>{{ $media->subtitle }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->index }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->size }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->status }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->rating }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->releaseDate }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->startDate }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->completeDate }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->lastDate }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->author_id }}</h2>
            </div>
            <div class="row">
                <h2>{{ $media->collection_id }}</h2>
            </div>
            <div class="row">
                <h2>Tags:</h2>
                <br>
                @foreach ($tags as $tag)
                    <h3>"{{ $tag->name }}"_</h3>
                @endforeach
            </div>
            <div class="row">
                <form action="/m/{{ $media->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row pt-4">
                        <button class="btn btn-danger">Delete</button>
                    </div>                
                </form>
            </div>
        </div>
    </div>
</div>
@endsection