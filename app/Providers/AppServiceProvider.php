<?php

namespace App\Providers;

use App\Models\Admin\Menus;
use App\Models\Admin\Sitesettings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $sitesettings = Sitesettings::all();
        $settings = [];
        foreach ($sitesettings as $sitesetting) {
            $settings[$sitesetting->slug] = $sitesetting->meta_value;
        }
        $all_menus = Menus::select('id')->get();
        $latestMenu = Menus::latest()->first();
        $menuid = $latestMenu ? $latestMenu->id : 0;

        View::share('all_menus', $all_menus);
        View::share('menuid', $menuid);
        View::share('settings', $settings);
    }
}
