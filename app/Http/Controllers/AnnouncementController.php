<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function showCreateForm()
    {
        return view('chefDep.announcements.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $announcement = new Announcement([
            'title' => $request->title,
            'content' => $request->content,
            'author_id' => auth()->id(), // Assuming user authentication
        ]);

        $announcement->save();

        return redirect()->route('announcements.index')
            ->with('success', 'Announcement created successfully!');
    }
}
