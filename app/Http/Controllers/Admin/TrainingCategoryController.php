<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TrainingCategory\StoreTrainingCategoryRequest;
use App\Http\Requests\TrainingCategory\UpdateTrainingCategoryRequest;
use App\Models\TrainingCategory;


class TrainingCategoryController extends BaseController
{
    public function index()
    {
        $trainingCategories = TrainingCategory::latest()->get();
        return view('admin.trainingcategory.index', compact('trainingCategories'));
    }

    public function create()
    {
        return view('admin.trainingcategory.create');
    }

    public function store(StoretrainingCategoryRequest $request)
    {
        trainingCategory::create($request->validated());
        toast('trainingcategory added successfully','success');
        return back();
    }

    public function show(trainingCategory $trainingCategory)
    {
        //
    }

    public function edit(trainingCategory $trainingCategory)
    {
        return view('admin.trainingcategory.edit',compact('trainingCategory'));
    }

    public function update(UpdatetrainingCategoryRequest $request, trainingCategory $trainingCategory)
    {
        $trainingCategory->update($request->validated());
        toast('trainingCategory updated successfully', 'success');
         return redirect()->route('admin.trainingCategory.index');
    }

    public function destroy(trainingCategory $trainingCategory)
    {
        $trainingCategory->delete();
        toast('trainingCategory deleted successfully',  'success');
        return back();
    }
}
