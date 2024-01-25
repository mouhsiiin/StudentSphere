@extends('layouts.mainLayout')

@section('content')
@if ($userName)
    <h1>Welcome, {{ $userName }}!</h1>
@endif
<h3>chef de departement</h3>

@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection