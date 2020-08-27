<?php

namespace App\Providers;

use App\Repositories\Contacts\EloquentContacts;
use App\Repositories\Contacts\ContactsRepository;
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
        $this->app->singleton(ContactsRepository::class, EloquentContacts::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
