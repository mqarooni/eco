<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Branding;
use App\Models\Footer;
use App\Models\Popupsandcookies;


class AboutController extends Controller
{
    public function index(): View
    {

        $branding = Branding::first();
        $footer = Footer::latest()->first();
        $cookie_settings = Popupsandcookies::latest()->first();


        return view('about', compact('branding', 'footer', 'cookie_settings'));
    }
}
