<?php

namespace TryChenhai\LaravelCommand;

use Illuminate\Support\ServiceProvider;
use TryChenhai\LaravelCommand\Console\Commands\LaravelHelperCommand;
use TryChenhai\LaravelCommand\Console\Commands\LaravelObserverCommand;
use TryChenhai\LaravelCommand\Console\Commands\LaravelRepositoryCommand;

class LaravelCommandServiceProvider extends ServiceProvider
{

    protected $commands = [
        LaravelObserverCommand::class,
        LaravelRepositoryCommand::class,
        LaravelHelperCommand::class
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
}
