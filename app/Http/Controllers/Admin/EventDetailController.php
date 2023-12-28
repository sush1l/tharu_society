<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventDetail\StoreEventDetailRequest;
use App\Http\Requests\EventDetail\UpdateEventDetailRequest;
use App\Models\EventDetail;
use Illuminate\Http\Request;

class EventDetailController extends Controller
{
    public function index()
    {
        $eventDetails = EventDetail::latest()->get();
        return view('admin.eventDetail.index', compact('eventDetails'));
    }

    public function create()
    {
        return view('admin.eventDetail.create');
    }

    public function store(StoreEventDetailRequest $request)
    {
        EventDetail::create($request->validated());
        toast('EventDetail added successfully', 'success');
        return back();
    }

    public function edit(EventDetail $eventDetail)
    {
        return view('admin.eventDetail.edit', compact('eventDetail'));
    }

    public function update(UpdateEventDetailRequest $request, EventDetail $eventDetail)
    {

        $eventDetail->update($request->validated());
        toast('EventDetail updated successfully', 'success');
        return redirect(route('admin.eventDetail.index'));
    }

    public function destroy(EventDetail $eventDetail)
    {
        $eventDetail->delete();
        toast('EventDetail deleted successfully', 'success');
        return back();
    }
}
