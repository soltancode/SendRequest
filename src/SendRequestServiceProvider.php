<?php

namespace Soltancode\SendRequest;

use Illuminate\Support\ServiceProvider;
use Soltancode\SendRequest\Interfaces\SendInterface;

class SendRequestServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(SendInterface::class, function() {
            return new ConnectApi();
        });
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return array('SendRequest');
    }
}