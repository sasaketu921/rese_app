<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションサービスを登録します。
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * アプリケーションサービスをブートストラップします。
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
