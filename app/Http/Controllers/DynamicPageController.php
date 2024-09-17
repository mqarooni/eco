<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Branding;
use App\Models\Landing;
use App\Models\Footer;
use App\Models\Popupsandcookies;
use App\Models\CustomPage;


class DynamicPageController extends Controller
{
    private function getSharedData(): array
    {
        $branding = Branding::latest()->first();
        $footer = Footer::latest()->first();
        $cookie_settings = Popupsandcookies::latest()->first();
        $popup = Popupsandcookies::latest()->first();
        $customPagesInHeader = CustomPage::where('show_in_header', true)->get();
        $customPagesInFooter = CustomPage::where('show_in_footer', true)->get();


        return compact('branding', 'footer', 'cookie_settings', 'popup', 'customPagesInHeader', 'customPagesInFooter');
    }

    public function index(): View
    {
        $sharedData = $this->getSharedData();
        $landing = Landing::latest()->first();

        return view('index', array_merge($sharedData, compact('landing')));
    }

     // Method to show custom pages based on slug
     public function showCustomPage($slug)
     {
         // Fetch shared data for header/footer
         $sharedData = $this->getSharedData();
     
         // Fetch the custom page by its slug
         $customPage = CustomPage::where('slug', $slug)->firstOrFail();
     
         // Pass the custom page data to the customPage view
         return view('customPage', array_merge($sharedData, compact('customPage')));
     }
     
     
}
