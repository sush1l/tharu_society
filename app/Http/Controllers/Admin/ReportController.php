<?php

namespace App\Http\Controllers\Admin;

use App\Models\Report;
use App\Http\Controllers\Controller;
use App\Http\Requests\Report\StoreReportRequest;
use App\Http\Requests\Report\UpdateReportRequest;
use App\Models\ReportCategory;
use Illuminate\Http\Request;

class ReportController extends BaseController
{
    public function index()
    {
        $reports = Report::latest()->get();
        return view('admin.report.index',compact('reports'));
    }

    public function create()
    {
        $reportCategories=ReportCategory::all();
        return view('admin.report.create',compact('reportCategories'));
    }

    public function store(StoreReportRequest $request)
    {
        Report::create($request->validated());
        toast('Report added successfully', 'success');
        return back();
    }

    public function show(Report $report)
    {
        //
    }

    public function edit(Report $report)
    {
        $reportCategories=ReportCategory::all();
        return view('admin.report.edit',compact('report','reportCategories'));
    }

    public function update(UpdateReportRequest $request, Report $report)
    {
        $report->update($request->validated());
        toast('Report updated successfully', 'success');
        return back();
    }

    public function destroy(Report $report)
    {
    $report->delete();
    toast('Report deleted successfully', 'success');
    return back();
    }
}
