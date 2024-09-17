<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Team;
use App\Models\Branding;
use App\Models\Footer;
use App\Models\Popupsandcookies;

class TeamController extends Controller
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
        $teams = Team::all();

        return view('team', array_merge($sharedData, compact('teams'))); 
    }

    public function show($slug): View
    {
        $sharedData = $this->getSharedData();  
        $team = Team::where('slug', $slug)->firstOrFail();

        return view('team-details', array_merge($sharedData, compact('team'))); 
    }
}


