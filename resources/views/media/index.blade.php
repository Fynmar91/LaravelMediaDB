@extends('layouts.app')

@section('content')
<div class="container">
    <index-table :media="{{ $media }}"></index-table>    
</div>
@endsection