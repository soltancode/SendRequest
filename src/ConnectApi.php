<?php

namespace Soltancode\SendRequest;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Soltancode\SendRequest\Interfaces\SendInterface;

class ConnectApi implements SendInterface
{
    /**
     * @var int
     */
    private int $timeoutSeconds = 30;

    /**
     * @param string $service Required | For example: https://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param string $method Required | For example: post
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function send(string $service, string $request, string $method, array $params = [], array $headers = []): mixed
    {
        try {
            $url = $service . $request;
            $response = Http::withHeaders($headers)->timeout($this->timeoutSeconds)->acceptJson()->$method($url, $params);
            return $response->object();
        } catch (\Exception $e) {
            return Response::json([$e->getMessage()], 500);
        }
    }

    /**
     * @param int $seconds
     * @return mixed
     */
    public function timeout(int $seconds): mixed
    {
        $this->timeoutSeconds = $seconds;
        return $this;
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