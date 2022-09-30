<?php

namespace Soltancode\SendRequest\Facades;

use Illuminate\Support\Facades\Facade;
use Soltancode\SendRequest\Interfaces\SendInterface;

class SendRequest extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return SendInterface::class;
    }

}