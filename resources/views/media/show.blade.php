@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>{{ $media->title }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->subtitle }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->type }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->subtype }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->index }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->episodes }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->genre }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->author }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->status }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->rating }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->releaseDate }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->startDate }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->completeDate }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->lastDate }}</h1>
            </div>
            <div class="row">
                <h1>{{ $media->collection_id }}</h1>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
</div>
@endsection