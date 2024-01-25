@extends('layouts.mainLayout')

@section('content')
<h1>welcome, Geust!</h1>

<a href="{{ route('login') }}" >Log in</a>

<div class="fonctionnalités" >
    <div> <div>fonctionnalité 1</div></div> 
</div>
@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection
