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
                <div class="pr-5"><strong>153</strong> entries</div>
                <div class="pr-5"><strong>153</strong> completed</div>
                <div class="pr-5"><strong>40</strong>%</div>
            </div>
            <div class="pt-4 font-weight-bold">ghghfghg</div>
            <div class="pt-4">fd;glfd';gldf\'gl\fdlgfdlsg\ldfs'gl\'dflsg\ldfsg\'ldsf\'gld\fsg\dsf</div>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Typ</th>
                <th scope="col">Staffeln</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($media as $m)
                <tr>
                    <th scope="row">{{ $m->id }}</th>
                    <td>{{ $m->name }}</td>
                    <td>{{ $m->type }}</td>
                    <td>{{ $m->seasons }}</td>
                  </tr>
                @endforeach              
            </tbody>
          </table>
    </div>
</div>
@endsection