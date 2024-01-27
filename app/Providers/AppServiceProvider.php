<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\NavbarComposer;
use Illuminate\Support\Facades\view;
use App\models\Testimonial;

use Illuminate\Pagination\Paginator;

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
        //
  
            view()->composer("admin.testimoninals",function($view){
                $counts= Testimonial::where('read_at',0)->count();
                $view->with('unread',$counts);
             
            });
            Paginator::useBootstrapFour();

    }
}
