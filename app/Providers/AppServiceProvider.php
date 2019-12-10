<?php

namespace App\Providers;

use App\Ticket;
use App\Message;
use App\Observers\TicketObserver;
use App\Observers\MessageObserver;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        Message::observe(MessageObserver::class);
        Ticket::observe(TicketObserver::class);
    }
}
