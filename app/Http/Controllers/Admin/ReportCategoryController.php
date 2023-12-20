<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportCategory\StoreReportCategoryRequest;
use App\Http\Requests\ReportCategory\UpdateReportCategoryRequest;
use App\Models\ReportCategory;
use Illuminate\Http\Request;

class ReportCategoryController extends BaseController
{
    public function index()
    {
        $reportCategories = ReportCategory::latest()->get();
        return view('admin.reportcategory.index', compact('reportCategories'));
    }
    public function create()
    {
        return view('admin.reportcategory.create');
    }
    public function store(StoreReportCategoryRequest $request)
    {
        ReportCategory::create($request->validated());
        toast('ReportCategory added successfully', 'success');
        return back();
    }

    public function edit(ReportCategory $reportCategory)
    {
        return view('admin.reportcategory.edit', compact('reportCategory'));
    }
    public function update(UpdateReportCategoryRequest $request, ReportCategory $reportCategory)
    {
        $reportCategory->update($request->validated());
        toast('ReportCategory update successfully', 'success');
        return back();
    }

    public function destroy(ReportCategory $reportCategory)
    {
        $reportCategory->delete();
        toast('ReportCategory deleted successfully', 'success');
        return back();
    }
}
