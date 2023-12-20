<?php

namespace App\Http\Controllers\Admin;

use App\Models\WorkCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\WorkCaategory\StoreWorkCategoryRequest;
use App\Http\Requests\WorkCaategory\UpdateWorkCategoryRequest;
use Illuminate\Http\Request;

class WorkCategoryController extends BaseController
{
    public function index()
    {
       $workCategories = WorkCategory::latest()->get();
        return view('admin.workcategory.index', compact('workCategories'));
    }

    public function create()
    {
        return view('admin.workcategory.create');
    }

    public function store(StoreWorkCategoryRequest $request)
    {
        WorkCategory::create($request->validated());
        toast('What we Do added successfully','success');
        return back();
    }


    public function edit(WorkCategory $workCategory)
    {
       return view('admin.workcategory.edit',compact('workCategory'));
    }

    public function update(UpdateWorkCategoryRequest $request, WorkCategory $workCategory)
    {
        $workCategory->update($request->validated());
        toast('What we Do updated successfully','success');
        return redirect()->route('admin.workCategory.index');
    }

    public function destroy(WorkCategory $workCategory)
    {
        $workCategory->delete();
        toast('What we Do deleted successfully',  'success');
        return back();
    }
}
