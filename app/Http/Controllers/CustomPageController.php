<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomPageController extends Controller
{
    public function showCustomPage($slug)
    {
        $sharedData = $this->getSharedData();
        $customPage = CustomPage::where('slug', $slug)->firstOrFail();
        return view('customPage', array_merge($sharedData, compact('customPage')));
    }
    

}
