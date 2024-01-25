@extends('layouts.mainLayout')

@section('content')

@if ($userName)
    <h1>Welcome, {{ $userName }}!</h1>
@endif

<h3>student</h3>

<a href="{{route('demandes.create')}}">creat a demand</a>

@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection

        