@extends('layouts.mainLayout')

@section('content')


@if ($userName)
    <h1>Welcome, {{ $userName }}!</h1>
@endif
<h3>Responsable du service pédagogique (vice doyan)</h3>

<a href="{{ route('home') }}" >Log out</a>

@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection