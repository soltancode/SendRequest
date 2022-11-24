<?php

namespace Soltancode\SendRequest\Interfaces;

/**
 * @property int $timeoutSeconds;
 */
interface SendInterface
{
    /**
     * @param string $service Required | For example: https://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param string $method Required | For example: post
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function send(string $service, string $request, string $method, array $params = [], array $headers = []): mixed;

    /**
     * @param int $seconds
     * @return mixed
     */
    public function timeout(int $seconds): mixed;

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function get(string $service, string $request, array $params = [], array $headers = []): mixed;

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function post(string $service, string $request, array $params = [], array $headers = []): mixed;

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function put(string $service, string $request, array $params = [], array $headers = []): mixed;

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function patch(string $service, string $request, array $params = [], array $headers = []): mixed;

    /**
     * @param string $service Required | For example: http://soltancode.com
     * @param string $request Required | For example: /user/validation
     * @param array $params For example: ["userId" => 3]
     * @param array $headers For example: ["Authorization" => "Bearer token"]
     * @return mixed
     */
    public function delete(string $service, string $request, array $params = [], array $headers = []): mixed;
}