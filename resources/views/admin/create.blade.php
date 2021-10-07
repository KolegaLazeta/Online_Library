@extends('layouts.admin')

    

@section('main')

<div class="container">
    
    <form action="/admin" enctype="multipart/form-data" method="post">
        @csrf   
        

            <div class="row">
            
            <div class="col-8 offset-2">
                <div class="row">
                    <h2> Dodaj knjigu </h2>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Naziv knjige</label>
    
                    
                    <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" 
                    name="name" 
                   
                    value="{{ old('name') }}"  
                    autocomplete="name" autofocus>
    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Deskripcija</label>
    
                    
                    <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" 
                    name="description" 
                    value="{{ old('description') }}"  
                    autocomplete="description" autofocus>
    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                
                <div class="form-group row">
                    <label for="writer" class="col-md-4 col-form-label">Pisac</label>
    
                    
                    <input id="writer" type="writer" class="form-control @error('writer') is-invalid @enderror" 
                    name="writer" 
                    value="{{ old('writer') }}"  
                    autocomplete="writer" autofocus>
    
                    @error('writer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">URL</label>
    
                    
                    <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" 
                    name="url" 
                    
                    value="{{ old('url') }}"  
                    autocomplete="url" autofocus>
    
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Naslovna slika knjige</label>

                    <input type="file" class="form-control-file" id="image" name="image">
                    @error('image')
                        
                            <strong>{{ $message }}</strong>
                       
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-danger">Add new post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection