<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\AboutController;
use App\Admin\Controllers\CustomPageController;
use App\Http\Controllers\FestivalListController;
use App\Models\Branding;


// Set the default route to the home page without language prefix
Route::get('/', [DynamicPageController::class, 'index'])->name('home');

// Route for language switching
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');


// Handle custom page 
Route::get('/custom-page/{slug}', [DynamicPageController::class, 'showCustomPage'])->name('custom.page.show');

// Handle dynamic page routing
Route::get('/page/{page}', [DynamicPageController::class, 'showPage']);
Route::post('/page/{page}/update', [DynamicPageController::class, 'updatePage']);



// Other website Pages
Route::get('/about', [AboutController::class, 'index'])->name('about');

