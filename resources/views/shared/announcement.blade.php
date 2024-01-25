
<div class="announcement-card">
    <div class="announcement-content">
        <h2 class="announcement-title">{{$announcement->title}}</h2>
        <p class="announcement-description">
            {{$announcement->content}}
        </p>
    </div>
    <div class="announcement-footer">
        <p>Posted on {{ $announcement->created_at->format('F j, Y') }}</p>
    </div>
</div>