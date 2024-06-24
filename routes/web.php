<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPage;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //... 
        Route::get('/test', function () {
            return view('test');
        });

        Route::get(('/'), [FrontPage::class, 'home'])->name('home');

        Route::get('/doctors', [FrontPage::class, 'doctors'])->name('home');

    }
);