@extends('layouts.mainLayout')

@section('content')
@if ($userName)
    <h1>Welcome, {{ $userName }}!</h1>
@endif
<h3>chef de departement</h3>

<a href="{{ route('home') }}" >Log out</a>
<a href="{{ route('chefDep.announcements.create') }}" >announcements</a>

@endsection