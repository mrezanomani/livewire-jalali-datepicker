<?php

namespace Meysamtech\LivewireJalaliDatepicker;

use Illuminate\Support\ServiceProvider;

class LivewireJalaliDatepickerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'livewire-jalali-datepicker');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/livewire-jalali-datepicker'),
        ], 'views');
    }
}