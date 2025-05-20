<?php

namespace App\Helpers;

class ResponseFormatter
{
    /**
     * API Response structure
     *
     * @var array
     */
    protected static $response = [
        'meta' => [
            'code' => 200,
            'status' => 'success',
            'message' => null,
        ],
        'data' => null,
    ];

    /**
     * Format success response
     *
     * @param mixed $data
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($data = null, $message = null, $code = 200)
    {
        self::$response['meta']['code'] = $code;
        self::$response['meta']['status'] = 'success';
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, $code);
    }

    /**
     * Format error response
     *
     * @param mixed $data
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error($data = null, $message = null, $code = 400)
    {
        self::$response['meta']['code'] = $code;
        self::$response['meta']['status'] = 'error';
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, $code);
    }

    /**
     * Format pagination response
     *
     * @param mixed $data
     * @param mixed $pagination
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public static function pagination($data, $pagination, $message = null, $code = 200)
    {
        self::$response['meta']['code'] = $code;
        self::$response['meta']['status'] = 'success';
        self::$response['meta']['message'] = $message;
        self::$response['data'] = $data;
        self::$response['pagination'] = $pagination;

        return response()->json(self::$response, $code);
    }
}