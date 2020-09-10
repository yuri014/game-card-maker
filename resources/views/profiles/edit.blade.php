@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card form-card">
                <div class="card-header">Edit Your Profile</div>

                <div class="card-body">
                    <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Bio Title <i class="fas fa-user"></i></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autofocus>
                            </div>

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for=description" class="col-md-4 col-form-label text-md-right">Description <i class="far fa-file-alt"></i></label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required>
                            </div>

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="favoriteCardGame" class="col-md-4 col-form-label text-md-right">Favorite Card Game <i class="fas fa-id-badge"></i></label>

                            <div class="col-md-6">
                                <input id="favoriteCardGame" type="text" class="form-control @error('favoriteCardGame') is-invalid @enderror" name="favoriteCardGame" value="{{ old('defence') ?? $user->profile->favoriteCardGame }}" required>
                            </div>

                            @error('favoriteCardGame')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Profile Image <i class="far fa-file-image"></i></label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control-file  @error('image') is-invalid @enderror" name="image">
                            </div>

                            @error('image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for=link" class="col-md-4 col-form-label text-md-right">Link <i class="fas fa-link"></i></label>

                            <div class="col-md-6">
                                <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') ?? $user->profile->link }}" required>
                            </div>

                            @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn button-form">
                                    Update Profile
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