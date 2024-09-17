<?php

namespace App\Http\Controllers;

use App\Models\Shop; // Assuming you have a Shop model for your shop items
use Illuminate\View\View;

class ShopController extends Controller
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

    public function show($slug): View
    {
        // Fetch shared data (header, footer, etc.)
        $sharedData = $this->getSharedData();

        // Fetch the shop item by slug from the database
        $shopItem = Shop::where('slug', $slug)->firstOrFail();

        // Pass the shop item to the shop-details view along with shared data
        return view('shop-details', array_merge($sharedData, compact('shopItem')));
    }
}
