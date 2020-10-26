@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" src="/svg/logo.png" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
            <h1>{{ $user->name }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ sizeof($media) }}</strong> entries</div>
                <div class="pr-5"><strong>153</strong> completed</div>
                <div class="pr-5"><strong>40</strong>%</div>
            </div>
            <div class="pt-4 font-weight-bold">ghghfghg</div>
            <a href="/m/create">Medieneintrag hinzufügen</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($media as $m)
                <tr>
                    <th scope="row">{{ $m->id }}</th>
                    <td>{{ $m->title }}</td>
                    <td>{{ $m->subtitle }}</td>
                  </tr>
                @endforeach              
            </tbody>
          </table>
    </div>
</div>
@endsection