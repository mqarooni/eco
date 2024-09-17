<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use App\Models\Branding;
use App\Models\AboutCommittee;
use App\Models\Footer;
use App\Models\Popupsandcookies;


class AboutCommitteeController extends Controller
{
    public function index(): View
    {
        $branding = Branding::first();
        $committees = AboutCommittee::all();
        $footer = Footer::latest()->first();
        $cookie_settings = Popupsandcookies::latest()->first();


        return view('aboutCommittee', compact('branding', 'committees', 'footer', 'cookie_settings'));
    }
}