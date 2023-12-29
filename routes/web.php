<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    if (config('default.dual_language')) {
        $locale = app()->getLocale();
        return redirect(route('welcome', ['language'=>$locale]));
    } else {
        return redirect(route('welcome'));
    }
});

Route::middleware('ipMiddleware')->group(function () {

    if (config('default.dual_language')) {
        Route::middleware('setLanguage')->group(function () {
            (new listing)->routes();
        });
    } else {
        (new listing)->routes();
    }
});

class listing
{
    public function routes(): void
    {
        Route::get('/', [FrontendController::class, 'index'])->name('welcome');
        Route::get('languageChange/{languageChange}',[FrontendController::class,'languageChange'])->name('language');
        Route::get('about_us', [FrontendController::class, 'about_us'])->name('about-us');
        Route::get('trainingCategory/{trainingCategory}', [FrontendController::class, 'trainingCategory'])->name('trainingCategory');
        Route::get('consultancy', [FrontendController::class, 'consultancy'])->name('consultancy');
        Route::get('abroad', [FrontendController::class, 'abroad'])->name('abroad');
        Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
        Route::get('work', [FrontendController::class, 'work'])->name('work');
        Route::get('work/{work}', [FrontendController::class, 'workDetail'])->name('work.workDetails');
//        Route::get('form', [FrontendController::class, 'form'])->name('form');
        Route::get('reportCategory/{reportCategory}',[FrontendController::class,'reportCategory'])->name('reportCategory');
        Route::get('report/{report}', [FrontendController::class, 'report'])->name('report.reportDetail');
        Route::get('photo', [FrontendController::class, 'photo'])->name('photo');
        Route::get('photoGallery/{photoGallery:slug}', [FrontendController::class, 'photoGalleryDetail'])->name('photoGallery.details');
        Route::get('video', [FrontendController::class, 'video'])->name('video');
        Route::get('audio', [FrontendController::class, 'audio'])->name('audio');
        // Route::get('tiktok', [FrontendController::class, 'tiktok'])->name('tiktok');
        Route::get('events', [FrontendController::class, 'events'])->name('events');
        Route::get('events/{events}', [FrontendController::class, 'eventDetail'])->name('events.eventDetail');
        Route::get('blogs', [FrontendController::class, 'blogs'])->name('blogs');
        // Route::get('news/{news}', [FrontendController::class, 'newsDetail'])->name('news.newsDetail');
        Route::get('blog/{blog}', [FrontendController::class, 'blogDetail'])->name('blog.blogDetail');
        Route::get('single_blog', [FrontendController::class, 'single_blog'])->name('single_blog');
        Route::get('announcement', [FrontendController::class, 'announcement'])->name('announcement');
        Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
        Route::post('contact', [FrontendController::class, 'contactStore'])->name('contact.store');
        Route::get('join', [FrontendController::class, 'join'])->name('join');
        Route::post('membershipForm', [FrontendController::class, 'membershipStore'])->name('membership.store');
        Route::get('link', [FrontendController::class, 'link'])->name('link');
        Route::get('membershipIntro', [FrontendController::class, 'membershipIntro'])->name('membershipIntro');
        Route::get('eventIntro', [FrontendController::class, 'eventIntro'])->name('eventIntro');
        Route::get('languageChange/{languageChange}',[FrontendController::class,'languageChange'])->name('language');
        Route::get('detail/{slug}', [FrontendController::class, 'staticMenus'])->name('static');
        Route::get('officeDetail/{officeDetail:slug}', [FrontendController::class, 'officeDetails'])->name('officeDetail');
        Route::get('city', [FrontendController::class, 'city'])->name('city');
        Route::get('job', [FrontendController::class, 'job'])->name('job');
        Route::get('member', [FrontendController::class, 'member'])->name('member');
        Route::get('search', [FrontendController::class, 'search'])->name('frontend.search');
        Route::get('addCity', [FrontendController::class, 'city'])->name('addCity');
        Route::get('city/{addCity:id}', [FrontendController::class, 'job'])->name('city');
        Route::get('jobDetail/{job:id}', [FrontendController::class, 'jobDetail'])->name('jobDetail');
        Route::get('popup', [FrontendController::class, 'popup'])->name('popup');
        Route::post('comment',[FrontendController::class,'comment'])->name('comment');

    }
}

