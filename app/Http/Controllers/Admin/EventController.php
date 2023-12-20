<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\StoreEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $events = Events::get();
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(StoreEventRequest $request)
    {
        DB::transaction(function() use($request){
            $event = Events::create($request->validated() );

            $event->videoGalleries()->create([
                'title'=>$request->input('title'),
                'title_en'=>$request->input('title'),
                'url'=>$request->input('video'),
            ]);
        });

        toast('Events added successfully', 'success');
        return back();
    }



    public function edit(Events $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Events $event)
    {

        if ($request->hasFile('image') && $data = $event->getRawOriginal('image')) {
            $this->deleteFile($data);
        }
        $event->update($request->validated());
        toast('Events updated successfully', 'success');
        return redirect(route('admin.event.index'));
    }

    public function destroy(Events $event)
    {
        $event->delete();
        toast('Events deleted successfully', 'success');
        return back();
    }
}
