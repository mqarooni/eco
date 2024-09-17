<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DynamicPageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutCommitteeController;
use App\Admin\Controllers\CustomPageController;
use App\Http\Controllers\FestivalsController;
use App\Http\Controllers\FestivalListController;
use App\Models\Branding;
use App\Models\Team;
use App\Models\Festivals;
use App\Http\Controllers\DevelopmentGoalsController;
use App\Http\Controllers\MeetingsController;


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

//team-details page  
Route::get('/team/{slug}', [TeamController::class, 'show'])->name('team.details');


// Route for displaying all festivals
Route::get('/festivals', [FestivalsController::class, 'index'])->name('festivals.index');

// Route for displaying individual festival details
Route::get('/festivals/{slug}', [FestivalsController::class, 'show'])->name('festival.details');


// Other website Pages
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/aboutCommittee', [AboutCommitteeController::class, 'index'])->name('aboutCommittee');
Route::get('/development-goals', [DevelopmentGoalsController::class, 'index'])->name('development-goals');
Route::get('/meetings', [MeetingsController::class, 'index'])->name('meetings');
Route::get('/meetings/{slug}', [MeetingsController::class, 'show'])->name('meetings.details');
Route::get('/festivals', [FestivalListController::class, 'index'])->name('festivals.list');
Route::get('/meetings', [MeetingsController::class, 'index'])->name('meetings');

