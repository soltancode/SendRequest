<?php

namespace Soltancode\SendRequest;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;

class ConnectApi
{
    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param string $method Required | For example: post
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function send(string $service, string $request, string $method, array $params = [], array $headers = []): mixed
    {
        try {
            $url = $service.$request;
            $response = Http::withHeaders($headers)->acceptJson()->$method($url, $params);
            $data = $response->object();

            return $data;
        } catch(\Exception $e) {
            return Response::json([$e->getMessage()], 500);
        }
    }

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function get(string $service, string $request, array $params = [], array $headers = []): mixed
    {
        return $this->send($service, $request, "get", $params, $headers);
    }

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function post(string $service, string $request, array $params = [], array $headers = []): mixed
    {
        return $this->send($service, $request, "post", $params, $headers);
    }

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function put(string $service, string $request, array $params = [], array $headers = []): mixed
    {
        return $this->send($service, $request, "put", $params, $headers);
    }

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function patch(string $service, string $request, array $params = [], array $headers = []): mixed
    {
        return $this->send($service, $request, "patch", $params, $headers);
    }

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function delete(string $service, string $request, array $params = [], array $headers = []): mixed
    {
        return $this->send($service, $request, "delete", $params, $headers);
    }
}