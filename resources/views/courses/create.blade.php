@extends('layouts.app', ['title' => 'Cours'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-0 font-weight-normal">
                        {{ __('Créer un cours') }}
                    </h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title" class="">Titre</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="description" class="">Description</label>
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description">

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="content" class="">Contenu</label>
                                <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" autocomplete="content">

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name='image' class="custom-file-input form-control @error('image') is-invalid @enderror" id="ValidatedCustomeFile1">
                                    <label for="ValidatedCustomeFile1" class="custom-file-label">Choisir une image</label>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="slug" class="">Url</label>
                                <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" autocomplete="slug">

                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="category_id" class="">Catégories</label>
                                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">                                   
                                        <option value="">Choisir une catégorie</option>
                                            @foreach ($categories as $cat)
                                               <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option> 
                                            @endforeach
                                </select>

                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Créer mon cours
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
