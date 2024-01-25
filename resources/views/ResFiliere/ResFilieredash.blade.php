@extends('layouts.mainLayout')

@section('content')

@if ($userName)
    <h1>Welcome, {{ $userName }}!</h1>
@endif
<h3>responsable de filiere</h3>


@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection