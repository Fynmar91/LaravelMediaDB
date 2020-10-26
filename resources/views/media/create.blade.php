@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/m" method="POST">
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
                        name="subtitle" value="{{ old('subtitle') }}" autocomplete="subtitle">        
                        @error('subtitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="tags" class="col-form-label">Tags</label>
                    <tag-input class="@error('subtitle') is-invalid @enderror"></tag-input>
                </div>

                

                <div class="row pt-4">
                    <button class="btn btn-primary">Add Media</button>
                </div>
    
            </div>
        </div>        
    </form>
</div>
@endsection