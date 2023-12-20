<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\Training\StoreTrainingRequest;
use App\Http\Requests\Training\UpdateTrainingRequest;
use App\Http\Requests\TrainingCategory\StoreTrainingCategoryRequest;
use App\Models\Training;
use App\Models\TrainingCategory;

class TrainingController extends BaseController
{
    public function index()
    {
        $trainings = Training::with('TrainingCategory')->latest()->get();
        return view('admin.training.index', compact('trainings'));
    }

    public function create()
    {
        $trainingCategories=TrainingCategory::all();
        return view('admin.training.create',compact('trainingCategories'));
    }

    public function store(StoreTrainingRequest $request)
    {
        training::create($request->validated());
        toast('News added successfully', 'success');
        return back();
    }

    public function edit(Training $training)
    {
        $trainingCategories=TrainingCategory::all();
        return view('admin.training.edit', compact('training','trainingCategories'));
    }

    public function update(UpdateTrainingRequest $request, Training $training)
    {

        if ($request->hasFile('image') && $data = $training->getRawOriginal('image')) {
            $this->deleteFile($data);
        }
        $training->update($request->validated());
        toast('training updated successfully', 'success');
        return redirect(route('admin.training.index'));
    }

    public function destroy(Training $training)
    {
        $training->delete();
        toast('training deleted successfully', 'success');
        return back();
    }
}
