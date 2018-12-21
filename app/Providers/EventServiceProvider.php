<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Отображения прослушивателя событий для приложения
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Зарегистрируйте любые события для вашего приложения.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
