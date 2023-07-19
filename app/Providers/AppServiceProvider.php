<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\LayoutComposer;
use Illuminate\Bus\Dispatcher;
use Illuminate\Support\Facades\View;
use App\Http\Resources\Api\OrderResource;
use App\Http\Resources\Api\InvoiceResource;

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
    public function boot(Dispatcher $events)
    {
        View::composer('layouts.web', LayoutComposer::class);
        OrderResource::withoutWrapping();
        InvoiceResource::withoutWrapping();
    }
}
