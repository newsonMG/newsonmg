@extends('layouts.app', ['title' => 'profil'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="" alt="" class="rounded-circle">
        </div>
        <div class="col-md-8">
            <div class="h1">{{ $user->username }}</div>
            <div class="d-flex mt-3">
            <div class="mr-3 "><strong>28</strong> publication(s)</div>
                <div class="mr-3 "><strong>10</strong> catégorie(s)</div>
                <div class="mr-3 "><strong>200</strong> élèves</div>
            </div>
            <div class="mt-3">
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
