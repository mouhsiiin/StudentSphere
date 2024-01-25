@extends('layouts.mainLayout')

@section('content')
<h1>welcome, Geust!</h1>

{{-- <div class="func-container">

    <div class="functionality" >
        <div> <div>fonctionnalité 1</div></div> 
    </div>
</div> --}}

@foreach ($announcements as $announcement)
    @include('shared.announcement')
@endforeach

<div id="announcement-details" style="display: none;">
    <!-- The details of the clicked announcement will be displayed here -->
</div>
@endsection
