@extends('layouts.mainLayout')

@section('content')
@if ($userName)
    <h1>Welcome, {{ $userName }}!</h1>
@endif
<h3>professeur responsable de module</h3>


@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection