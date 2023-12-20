<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Work\StoreWorkRequest;
use App\Http\Requests\Work\UpdateWorkRequest;
use App\Models\work;
use App\Models\WorkCategory;
use Illuminate\Http\Request;

class WorkController extends BaseController
{
    public function index()
    {
        $works = work::with('WorkCategory')->latest()->get();
        return view('admin.work.index', compact('works'));
    }

    public function create()
    {
        $workCategories=WorkCategory::all();
        return view('admin.work.create',compact('workCategories'));
    }

    public function store(StoreWorkRequest $request)
    {
        Work::create($request->validated());
        toast('What we Do added successfully', 'success');
        return back();
    }

    public function edit(Work $work)
    {
        $workCategories=WorkCategory::all();
        return view('admin.work.edit', compact('work','workCategories'));
    }

    public function update(UpdateWorkRequest $request, Work $work)
    {

        $work->update($request->validated());
        toast('News updated successfully', 'success');
        return redirect(route('admin.work.index'));
    }

    public function destroy(Work $work)
    {
        $work->delete();
        toast('What we Do deleted successfully', 'success');
        return back();
    }
}
