@extends('layouts.mainLayout')

@section('content')
<h1>welcome, Geust!</h1>

<a href="{{ route('login') }}" >Log in</a>

@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection
