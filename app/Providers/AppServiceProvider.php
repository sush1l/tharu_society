<?php

namespace App\Providers;

use App\Models\DocumentCategory;
use App\Models\Employee;
use App\Models\Menu;
use App\Models\OfficeDetail;
use App\Observers\DocumentCategoryObserver;
use App\Observers\EmployeeObserver;
use App\Observers\MenuObserver;
use App\Observers\OfficeDetailObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Paginator::useBootstrap();
        Model::preventLazyLoading();
        Employee::observe(EmployeeObserver::class);
        Menu::observe(MenuObserver::class);
        OfficeDetail::observe(OfficeDetailObserver::class);
        DocumentCategory::observe(DocumentCategoryObserver::class);
    }
}
