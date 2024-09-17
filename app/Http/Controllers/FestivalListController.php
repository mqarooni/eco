<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Festivals;
use App\Models\Branding;
use App\Models\Footer;
use App\Models\Popupsandcookies;

class FestivalListController extends Controller
{
    private function getSharedData(): array
    {
        $branding = Branding::first();
        $footer = Footer::latest()->first();
        $cookie_settings = Popupsandcookies::latest()->first();

        return compact('branding', 'footer', 'cookie_settings');
    }

    public function index(): View
    {
        $sharedData = $this->getSharedData(); 
        $festivals = Festivals::all(); // Fetch all festivals from the database

        return view('festivals', array_merge($sharedData, compact('festivals'))); 
    }
}
