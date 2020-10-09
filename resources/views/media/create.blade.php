@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/m" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">    

                <div class="row">
                    <h1>Medieneintrag hinzufügen</h1>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Titel</label>        
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                        name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>        
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="subtitle" class="col-md-4 col-form-label">Untertitel</label>        
                    <input id="subtitle" type="text" class="form-control @error('subtitle') is-invalid @enderror" 
                        name="subtitle" value="{{ old('subtitle') }}" required autocomplete="subtitle">        
                        @error('subtitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label">Typ</label>    
                    <div class="form-check form-check-inline @error('type') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="type" id="type" value="Buch">
                        <label class="form-check-label" for="type">Buch</label>
                      </div>
                      <div class="form-check form-check-inline @error('type') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="type" id="type" value="Film">
                        <label class="form-check-label" for="type">Film</label>
                      </div>
                      <div class="form-check form-check-inline @error('type') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="type" id="type" value="Staffel">
                        <label class="form-check-label" for="type">Staffel</label>
                      </div>
                      @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group row">
                    <label for="subtype" class="col-md-4 col-form-label">Typ</label>    
                    <div class="form-check form-check-inline @error('subtype') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="subtype" id="subtype" value="Anime">
                        <label class="form-check-label" for="subtype">Anime</label>
                      </div>
                      <div class="form-check form-check-inline @error('subtype') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="subtype" id="subtype" value="Manga">
                        <label class="form-check-label" for="subtype">Manga</label>
                      </div>
                      <div class="form-check form-check-inline @error('subtype') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="subtype" id="subtype" value="Web-Novel">
                        <label class="form-check-label" for="subtype">Web-Novel</label>
                      </div>
                      @error('subtype')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Add Media</button>
                </div>
    
            </div>
        </div>        
    </form>
</div>
@endsection