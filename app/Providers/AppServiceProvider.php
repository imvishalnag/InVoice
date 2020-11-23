<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);
        // English
        View::composer('web.include.header', function ($view) {
            $assam = Category::whereStatus(1)->whereCategoryName('Assam')->first();
            $northeast = Category::whereStatus(1)->whereCategoryName('Northeast')->first();
            $international = Category::whereStatus(1)->whereCategoryName('International')->first();
            $politics = Category::whereStatus(1)->whereCategoryName('Politics')->first();
            $economy = Category::whereStatus(1)->whereCategoryName('Economy')->first();
            $crime = Category::whereStatus(1)->whereCategoryName('Crime')->first();
            $category = Category::whereStatus(1)->whereNotIn('id', [1,2,9,11,13,14])->limit(12)->get();
            $national = Category::whereStatus(1)->whereCategoryName('National')->first();
            $data = [
                'assam' => $assam,
                'northeast' => $northeast,
                'national' => $national,
                'international' => $international,
                'politics' => $politics,
                'economy' => $economy,
                'crime' => $crime,
                'category' => $category,
            ];
            $view->with('header_data', $data);
        });

        // Aassamese
        View::composer('as.include.header', function ($view) {
            $assam = Category::whereStatus(1)->whereCategoryName('Assam')->first();
            $northeast = Category::whereStatus(1)->whereCategoryName('Northeast')->first();
            $international = Category::whereStatus(1)->whereCategoryName('International')->first();
            $politics = Category::whereStatus(1)->whereCategoryName('Politics')->first();
            $economy = Category::whereStatus(1)->whereCategoryName('Economy')->first();
            $crime = Category::whereStatus(1)->whereCategoryName('Crime')->first();
            $category = Category::whereStatus(1)->whereNotIn('id', [1,2,9,11,13,14])->limit(12)->get();
            $national = Category::whereStatus(1)->whereCategoryName('National')->first();
            $data = [
                'assam' => $assam,
                'northeast' => $northeast,
                'national' => $national,
                'international' => $international,
                'politics' => $politics,
                'economy' => $economy,
                'crime' => $crime,
                'category' => $category,
            ];
            $view->with('header_data', $data);
        });

        view()->composer('web.include.footer', function ($view) {
            $assam = Category::whereStatus(1)->whereCategoryName('Assam')->first();
            $northeast = Category::whereStatus(1)->whereCategoryName('Northeast')->first();
            $international = Category::whereStatus(1)->whereCategoryName('International')->first();
            $politics = Category::whereStatus(1)->whereCategoryName('Politics')->first();
            $economy = Category::whereStatus(1)->whereCategoryName('Economy')->first();
            $crime = Category::whereStatus(1)->whereCategoryName('Crime')->first();
            $national = Category::whereStatus(1)->whereCategoryName('National')->first();
            $data = [
                'assam' => $assam,
                'northeast' => $northeast,
                'national' => $national,
                'international' => $international,
                'politics' => $politics,
                'economy' => $economy,
                'crime' => $crime
            ];
            $view->with('footer_data', $data);
        });
        // Assamese
        view()->composer('as.include.footer', function ($view) {
            $assam = Category::whereStatus(1)->whereCategoryName('Assam')->first();
            $northeast = Category::whereStatus(1)->whereCategoryName('Northeast')->first();
            $international = Category::whereStatus(1)->whereCategoryName('International')->first();
            $politics = Category::whereStatus(1)->whereCategoryName('Politics')->first();
            $economy = Category::whereStatus(1)->whereCategoryName('Economy')->first();
            $crime = Category::whereStatus(1)->whereCategoryName('Crime')->first();
            $national = Category::whereStatus(1)->whereCategoryName('National')->first();
            $data = [
                'assam' => $assam,
                'northeast' => $northeast,
                'national' => $national,
                'international' => $international,
                'politics' => $politics,
                'economy' => $economy,
                'crime' => $crime
            ];
            $view->with('footer_data', $data);
        });
    }
}
