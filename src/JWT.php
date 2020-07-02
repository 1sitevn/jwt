<?php

namespace OneSite\JWT;

/**
 * Class JWT
 * @package OneSite\JWT
 */
class JWT
{

    /**
     * JWT constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $payload
     * @param $key
     * @param string $alg
     * @return string
     */
    public function encode($payload, $key, $alg = 'HS256')
    {
        return \Firebase\JWT\JWT::encode($payload, $key, $alg);
    }

    /**
     * @param $jwt
     * @param $key
     * @param string $alg
     * @return mixed
     */
    public function decode($jwt, $key, $alg = 'HS256')
    {
        return \Firebase\JWT\JWT::decode($jwt, $key, [$alg]);
    }
}
