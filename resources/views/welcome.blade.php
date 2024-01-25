@extends('layouts.mainLayout')

@section('content')
<h1>welcome, Geust!</h1>


@foreach ($announcements as $announcement)
    <div class="announcement" data-id="{{ $announcement->id }}">
        @include('shared.announcement')
    </div>
@endforeach

<div id="announcement-details" style="display: none;">
    <!-- The details of the clicked announcement will be displayed here -->
</div>
@endsection
