<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use DB;
use View;
use Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*', function($view)
        {
            if (Auth::check()) {
                $histories = DB::table('revisions')->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();  //passing variable to all views
                $loggers = DB::table('revisions')->where('key','status')->orderBy('id', 'desc')->get(); 

                $view->with('histories', $histories,'loggers', $loggers);
            }else {
                $view->with('currentUser', null);
            }
        });




        config(['app.locale' => 'id']);     // supaya karbon bisa bahasa indonesia
        \Carbon\Carbon::setLocale('id');    // supaya karbon bisa bahasa indonesia
        

         Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
