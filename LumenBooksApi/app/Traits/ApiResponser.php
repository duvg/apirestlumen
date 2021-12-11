<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * Build a success response
     * @param string|array $data
     * @param int $code
     * @return JsonResponse
     */
    public function successResponse($data, int $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json(['data' => $data], $code);
    }

    /**
     * Build a error response
     * @param $message
     * @param  integer $code  Status Code
     * @return JsonResponse
     */
    public function errorResponse($message, int $code): JsonResponse
    {
        return response()->json(['error' => $message], $code);
    }
}
