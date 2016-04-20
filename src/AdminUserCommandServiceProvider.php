<?php

namespace RTMatt\AdminUserCommand;

use Illuminate\Support\ServiceProvider;

class AdminUserCommandServiceProvider extends ServiceProvider
{
    protected $commands = [
        '\RTMatt\AdminUserCommand\AdminUserMake'
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
