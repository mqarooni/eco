<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Festivals;
use App\Models\Branding;
use App\Models\Footer;
use App\Models\Popupsandcookies;

class FestivalsController extends Controller
{
    /**
     * Retrieve shared data across pages.
     *
     * @return array
     */
    private function getSharedData(): array
    {
        $branding = Branding::first();
        $footer = Footer::latest()->first();
        $cookie_settings = Popupsandcookies::latest()->first();

        return compact('branding', 'footer', 'cookie_settings');
    }

    /**
     * Show the list of all festivals.
     *
     * @return View
     */
    public function index(): View
    {
        $sharedData = $this->getSharedData();
        $festivals = Festivals::all();

        return view('festivals.index', array_merge($sharedData, compact('festivals')));
    }

    /**
     * Show a single festival based on the slug.
     *
     * @param string $slug
     * @return View
     */
    public function show($slug): View
    {
        $sharedData = $this->getSharedData();
        $festival = Festivals::where('slug', $slug)->firstOrFail();

        return view('festivals-details', array_merge($sharedData, compact('festival')));
    }
}
