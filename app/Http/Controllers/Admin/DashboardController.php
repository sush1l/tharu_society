<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bill;
use App\Models\DocumentCategory;
use App\Models\Employee;
use App\Models\PhotoGallery;
use App\Models\Slider;
use App\Models\Smuggling;
use App\Models\SubDivision\SubDivisionDocument;
use App\Models\SubDivision\SubDivisionEmployee;

class DashboardController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function __invoke()
    {

        $photoGalleryCount =  PhotoGallery::count();
        $documentCategories = DocumentCategory::withCount('mainDocuments')->whereNull('document_category_id')->get();
        return view('dashboard', compact( 'photoGalleryCount', 'documentCategories'));
    }

}
