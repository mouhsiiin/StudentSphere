@extends('layouts.mainLayout')

@section('content')
<h1>welcome, Geust!</h1>

<a href="{{ route('login') }}" >Log in</a>

<div class="fonctionnalités" >
    <div> <div><a href="/filiers/affichageFiliere">filiers</a></div></div> 
</div>
@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

@endsection
