<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\CustomPage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share custom pages in header and footer globally
        View::composer('*', function ($view) {
            $customPagesInHeader = CustomPage::where('show_in_header', true)->get();
            $customPagesInFooter = CustomPage::where('show_in_footer', true)->get();

            $view->with(compact('customPagesInHeader', 'customPagesInFooter'));
        });
    }
}
