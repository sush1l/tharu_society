<?php

namespace App\Http\Controllers;

use App\Models\OfficeSetting;

class BaseController extends Controller
{
    public function __construct()
    {
        // $reportCategories = ReportCategory::latest()->get();
        // $workCategories = WorkCategory::with('works')->latest()->get();
        // $trainingCategories = TrainingCategory::latest()->get();
        // $sharedLinks = Link::latest()->limit(5)->get();
        $header = OfficeSetting::latest()->first();

        // $sharedMenus = Menu::with([
        //     'menus' => function ($query) {
        //         $query->with('model')->whereStatus(1)->orderBy('position');
        //     },
        //     'model'
        // ])
        //     ->withCount('menus')
        //     ->whereNull('menu_id')
        //     ->whereStatus(1)
        //     ->orderBy('position', 'asc')
        //     ->get();

        // view()->share('reportCategories', $reportCategories);
        // view()->share('trainingCategories', $trainingCategories);
        // view()->share('workCategories', $workCategories);
        view()->share('header', $header);
        // view()->share('sharedLinks', $sharedLinks);
        // view()->share('sharedMenus', $sharedMenus);
        // view()->share('language', Cache::get('language') ?? $_GET['language'] ?? 'ne');
        // view()->share('totalVisitors', Ip::distinct('ip_address')->count());
        // view()->share('colors',Color::first());
        // view()->share('officeSettingHeaders',OfficeSettingHeader::orderBy('position')->get());
    }
}
