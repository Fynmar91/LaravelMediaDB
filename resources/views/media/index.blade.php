@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-3">
        <div class="d-flex">
            <div class="pr-5"><strong>{{ sizeof($media) }}</strong> entries</div>
            <div class="pr-5"><strong>999</strong> completed</div>
            <div class="pr-5"><strong>999</strong>%</div>
        </div>
        <a href="/m/create">Medieneintrag hinzufügen</a>
    </div>    
    <div class="row">
        <index-table :media="{{ $media }}"></index-table>
    </div>
</div>
@endsection