<?php

require '../vendor/autoload.php';

# If you use it as class (facade), import this.
use Soltancode\SendRequest\Facades\SendRequest;

$baseUrl = "https://dummyjson.com";
$service = "/products/1";

# Using as class:
return SendRequest::get($baseUrl, $service);

# Using as helper:
return sendRequest()->get($baseUrl, $service);