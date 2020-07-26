@extends('layouts.app', ['title' => 'Profil'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-0 font-weight-normal">
                        {{ __('Editer mes informations') }}
                    </h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profiles.update', ['user' => $user]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="title" class="">Titre</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="description" class="">Description</label>
                                <textarea id="description" type="text" class="form-control @error('description')
                                 is-invalid @enderror" name="description"
                                  autocomplete="description" autofocus>{{ old('description') ?? $user->profile->description }}
                                </textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name='avatar' class="custom-file-input form-control @error('avatar') is-invalid @enderror" id="ValidatedCustomeFile1">
                                    <label for="ValidatedCustomeFile1" class="custom-file-label">Choisir une image</label>

                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Sauvegarder mes modifications
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
