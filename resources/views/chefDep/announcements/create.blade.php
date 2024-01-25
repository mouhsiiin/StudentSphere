
@extends('layouts.mainLayout')

@section('content')
    <div class="announcement-container ">
        <h2>Create Announcement</h2>

        @if(session('success'))
            <div class="text-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('chefDep.announcements.create') }}" method="post" class="form-container">
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
@endsection
