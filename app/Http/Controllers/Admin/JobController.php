<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\StoreJobRequest;
use App\Http\Requests\Job\UpdateJobRequest;
use App\Models\AddCity;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
  public function index()
  {
    $jobs = Job::with('addCity')->latest()->get();
    return view('admin.job.index', compact('jobs'));
  }

  public function create()
  {
    $addCities = AddCity:: all();
    return view('admin.job.create', compact('addCities'));
  }

  public function store(StoreJobRequest $request)
  {
    Job::create($request->validated());
    toast('Job created successfully', 'success');
    return redirect(route('admin.job.index'));
  }

  public function edit(Job $job)
  {
    $addCities = AddCity:: all();
    return view('admin.job.edit', compact('job','addCities'));
  }

  public function update(UpdateJobRequest $request, Job $job)
  {
    $job->update($request->validated());
    toast('Job Updated successfully', 'success');
    return redirect(route('admin.job.index'));
  }

  public function destroy(Job $job)
  {
    $job->delete();
    toast('Job Deleted successfully', 'success');
    return back();
  }
}
