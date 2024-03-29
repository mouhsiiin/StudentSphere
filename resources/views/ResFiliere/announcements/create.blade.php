<!-- resources/views/announcements/create.blade.php -->

{{-- @extends('layouts.app')  Assuming you have a layout file --}}

{{-- @section('content') --}}
<div class="container">
    <h2>Create Announcement</h2>

    @if(session('success'))
        <div class="text-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('ResFiliere.announcements.create') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Announcement</button>
    </form>
    
</div>
{{-- @endsection --}}
