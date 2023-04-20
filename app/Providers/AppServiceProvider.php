<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Courses\CourseDetail;
use Illuminate\Support\Facades\View;
use App\Models\Courses\CourseOutline;
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
        View::composer('*', function ($view) {
            $view->with('messages', Contact::all());
            $view->with('users', User::first());
            $view->with('courses', CourseDetail::all()->take(3));
        });
    }
}
