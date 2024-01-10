<?php

use App\Http\Controllers\Admin\{AddCityController, AnnouncementController, AudioController,
    BlogController,
    CategoryController,
    ColorController,
    ContactMessageController,
    DashboardController,
    DocumentCategoryController,
    DocumentController,
    EventController,
    EventDetailController,
    FileController,
    FileUploadController,
    JobController,
    LinkController,
    MemberController,
    MembershipCategoryController,
    MembershipController,
    MembershipJoinController,
    MenuController,
    OfficeDetailController,
    OfficeSettingController,
    OfficeSettingHeaderController,
    PhotoGalleryController,
    ReportCategoryController,
    ReportController,
    SliderController,
    TikTokController,
    UserManagement\ProfileController,
    UserManagement\RoleController,
    UserManagement\UserController,
    VideoGalleryController};
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PopupController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', DashboardController::class)->name('dashboard');

Route::prefix('/setting')->group(function () {
    Route::resource('officeSetting', OfficeSettingController::class)->only('index', 'update');
    Route::resource('officeDetail', OfficeDetailController::class);
});

Route::prefix('profile')->as('profile.')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('show');
    Route::put('/updateProfile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::put('/updatePassword', [ProfileController::class, 'updatePassword'])->name('updatePassword');
});
Route::prefix('userManagement')->group(function () {
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
});



Route::get('documentCategory/{documentCategory}/showOnIndex', [DocumentCategoryController::class, 'showOnIndex'])->name('documentCategory.showOnIndex');
Route::resource('documentCategory', DocumentCategoryController::class);
Route::get('documentCategory/{documentCategory}/document/{document}/updateStatus', [DocumentController::class, 'updateStatus'])->name('documentCategory.document.updateStatus');
Route::get('documentCategory/{documentCategory}/document/{document}/markAsNew', [DocumentController::class, 'markAsNew'])->name('documentCategory.document.markAsNew');
Route::get('documentCategory/{documentCategory}/document/{document}/popUp', [DocumentController::class, 'popUp'])->name('documentCategory.document.popUp');
Route::resource('documentCategory/{documentCategory}/document', DocumentController::class)->names('documentCategory.document');
Route::get('documentCategory/{documentCategory}/category/{category}/showOnIndex', [CategoryController::class, 'showOnIndex'])->name('documentCategory.category.showOnIndex');
Route::resource('documentCategory/{documentCategory}/category', CategoryController::class)->names('documentCategory.category');



Route::put('officeDetail/{officeDetail}/showOnIndex', [OfficeDetailController::class, 'showOnIndex'])->name('officeDetail.showOnIndex');
Route::get('officeDetail/{officeDetail}/showOnIndex', [OfficeDetailController::class, 'showOnIndex'])->name('officeDetail.showOnIndex');
Route::get('menu/{menu}/updateStatus', [MenuController::class, 'updateStatus'])->name('menu.updateStatus');
Route::resource('menu', MenuController::class);


Route::prefix('gallery')->group(function () {
    Route::delete('photo/{photo}/delete', [PhotoGalleryController::class, 'deletePhoto'])->name('photo.deletePhoto');
    Route::resource('photoGallery', PhotoGalleryController::class);
    Route::resource('videoGallery', VideoGalleryController::class);
    Route::resource('audio', AudioController::class);
    Route::resource('tikTok', TikTokController::class);
});

Route::post('file-upload/chunkStore', [FileUploadController::class, 'chunkFileStore'])->name('fileUpload.chunkStore');
//link

Route::resource('link', LinkController::class);
Route::resource('announcement', AnnouncementController::class);
Route::resource('slider', SliderController::class);


Route::prefix('report')->group( function (){
    Route::resource('reportCategory', ReportCategoryController::class);
    Route::resource('report', ReportController::class);
});


Route::prefix('membership')->group( function (){
    Route::resource('membershipCategory', MembershipCategoryController::class);
    Route::resource('membership', MembershipController::class);
    Route::resource('membershipJoin', MembershipJoinController::class)->only('index', 'destroy');
    Route::resource('member', MemberController::class);

});

Route::prefix('job')->group( function (){
    Route::resource('addCity', AddCityController::class);
    Route::resource('job', JobController::class);
});



Route::prefix('blogs')->group( function (){
    Route::resource('blog', BlogController::class);
    Route::resource('comment', CommentController::class);
});
//file Deletes
Route::resource('file', FileController::class)->only('destroy');

Route::resource('contactMessage', ContactMessageController::class)->only('index', 'destroy');



Route::resource('color', ColorController::class);
Route::resource('officeSettingHeader', OfficeSettingHeaderController::class);




Route::prefix('events')->group( function (){
    Route::resource('event', EventController::class);
    Route::resource('eventDetail', EventDetailController::class);
});


Route::resource('popup',PopupController::class);
Route::put('popup/{popup}/showOnIndex', [PopupController::class, 'showOnIndex'])->name('popup.showOnIndex');
Route::get('popup/{popup}/showOnIndex', [PopupController::class, 'showOnIndex'])->name('popup.showOnIndex');
