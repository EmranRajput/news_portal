<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Frontend\homecontroller;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin', function () {
    return view('backend.index');
});
 Route::controller(homecontroller::class)->group(function(){
    Route::get('/home', 'index')->name('home.news');
    Route::get('/news/{slug}', 'ViewNews')->name('view.news.detail');

    });


// Route::get('/category', function () {
//     return view('backend.index');
// });

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::get('/view/category', 'ViewCategory')->name('view.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category/{id}', 'UpdateCategory')->name('update.category');
        Route::post('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
        Route::post('/category/status-toggle/{id}', 'ToggleCategoryStatus')->name('category.status.toggle');
        });
        // ............News Routes...........
    Route::controller(NewsController::class)->group(function(){
        Route::get('/index/news', 'index')->name('index.news');
        Route::get('/add/news', 'AddNews')->name('add.news');
        Route::post('/store/news', 'StoreNews')->name('store.news');
        Route::get('/view/news/{id}', 'ViewNews')->name('view.news');
        Route::get('/edit/news/{id}', 'EditNews')->name('edit.news');
        Route::post('/update/news/{id}', 'UpdateNews')->name('update.news');
        Route::post('/delete/news/{id}', 'DeleteNews')->name('delete.news');
        Route::post('/news/status-toggle/{id}', 'ToggleNewsStatus')->name('news.status.toggle');
        Route::get('/draft/news', 'DraftNews')->name('draft.news');
        Route::get('/schedule/news', 'ScheduleNews')->name('schedule.news');



        });




});

require __DIR__.'/auth.php';
