<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Branding;
use App\Models\Footer;
use App\Models\Popupsandcookies;
use App\Models\Meetings;

class MeetingsController extends Controller
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
        $meetings = Meetings::all(); 

        return view('meetings', array_merge($sharedData, compact('meetings')));
    }

    public function show($slug): View
    {
        $sharedData = $this->getSharedData();
        $meeting = Meetings::where('slug', $slug)->firstOrFail();

        $recentMeetings = Meetings::where('id', '!=', $meeting->id)
            ->orderBy('created_at', 'desc')
            ->take(5) 
            ->get();

        return view('meetings-details', array_merge($sharedData, compact('meeting', 'recentMeetings')));
    }
    
}
