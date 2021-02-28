@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card form-card">
                <div class="card-header">Create Your Card</div>

                <div class="card-body">
                    <form method="POST" action="/card" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Card Title <i class="fas fa-crown"></i></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>
                            </div>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="power" class="col-md-4 col-form-label text-md-right">Damage <i class="fas fa-skull-crossbones"></i></label>

                            <div class="col-md-6">
                                <input id="power" type="number" class="form-control @error('power') is-invalid @enderror" name="power" value="{{ old('power') }}" required>
                            </div>

                            @error('power')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="defence" class="col-md-4 col-form-label text-md-right">Defence <i class="fas fa-shield-alt"></i></label>

                            <div class="col-md-6">
                                <input id="defence" type="number" class="form-control @error('defence') is-invalid @enderror" name="defence" value="{{ old('defence') }}" required>
                            </div>

                            @error('defence')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for=description" class="col-md-4 col-form-label text-md-right">Description <i class="far fa-file-alt"></i></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required>
                            </div>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Image <i class="far fa-file-image"></i></label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control-file  @error('image') is-invalid @enderror" name="image">
                            </div>

                            @error('image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn button-form width-100">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection