<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Branding;
use App\Models\Footer;
use App\Models\Popupsandcookies;
use App\Models\Developmentgoals;

class DevelopmentGoalsController extends Controller
{

    private function getSharedData(): array
    {
        $branding = Branding::first();
        $footer = Footer::latest()->first();
        $cookie_settings = Popupsandcookies::latest()->first();
        $goals = Developmentgoals::all();


        return compact('branding', 'footer', 'cookie_settings', 'goals');
    }


    public function index(): View
    {

        $sharedData = $this->getSharedData(); 
        return view('development-goals', $sharedData);
    }
}
