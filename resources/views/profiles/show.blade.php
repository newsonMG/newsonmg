@extends('layouts.app', ['title' => 'Profil'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 text-center">
            <img src="{{ $user->profile->getImage() }}" alt="" class="rounded-circle w-100" style="max-width: 230px;">
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="h1 mr-3 ">{{ $user->username }}</div>
            <a href="{{ route('profiles.edit', auth()->user()->username) }}" class="btn btn-outline-secondary mt-2">Modifier mes informations</a>
            <div class="mr-3 mt-2"><strong>{{ $user->courses->count() }}</strong> publication(s)</div>
            <div class="mt-1">
                <div class="font-weight-bold">{{ $user->profile->title }}</div>
                <div class="lead">{{ $user->profile->description }}</div>
            </div>
        </div>
    </div>
    <hr class="my-4 border border-dark">
    <div class="row mt-4">
        @foreach ($user->courses as $course)
            <div class="col-md-4 pb-3">
                <a href="{{ route('courses.show', ['course' => $course->id]) }}">
                    <img src="{{ asset('storage') . '/' . $course->image }}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
