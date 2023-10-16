<?php

namespace App\Providers;

use App\Models\Activitie;
use App\Models\Category;
use App\Models\Country;
use App\Models\Job;
use Illuminate\Support\ServiceProvider;

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
        $categories = Category::all();
        view()->share('categories', $categories);

        $countries = Country::all();
        view()->share('countries', $countries);

        $jobs_lists = Job::latest()->take(6)->get();
        view()->share('jobs_lists', $jobs_lists);

        $footer_activities = Activitie::all();
        view()->share('footer_activities', $footer_activities);

    }
}
