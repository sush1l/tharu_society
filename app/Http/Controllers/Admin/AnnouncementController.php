<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Announcement\StoreAnnouncementRequest;
use App\Http\Requests\Announcement\UpdateAnnouncementRequest;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends BaseController
{
    public function index()
    {
        $announcements = Announcement::latest()->get();
       return view('admin.announcement.index',compact('announcements'));
    }


    public function create()
    {
        return view('admin.announcement.create');
    }

    public function store(StoreAnnouncementRequest $request)
    {
        Announcement::create($request->validated());
        toast('Announcement added successfully', 'success');
        return back();
    }
    public function edit(Announcement $announcement)
    {
        return view('admin.announcement.edit',compact('announcement'));
    }
    public function update(UpdateAnnouncementRequest $request, Announcement $announcement)
    {
        if ($request->hasFile('image') && $data = $announcement->getRawOriginal('image')) {
            $this->deleteFile($data);
        }
       $announcement->update($request->validated());
        toast('Announcement updated successfully', 'success');
        return back();
    }
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        toast('Announcement deleted successfully', 'success');
        return back();
    }
}
