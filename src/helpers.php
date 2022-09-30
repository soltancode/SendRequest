<?php

if (!function_exists('sendRequest')) {
    function sendRequest()
    {
        return new \Soltancode\SendRequest\ConnectApi;
    }
}