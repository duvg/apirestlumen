<?php

namespace App\Traits;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    /**
     * Build a success response
     * @param string|array $data
     * @param int $code
     * @return Response
     */
    public function successResponse($data, int $code = Response::HTTP_OK): Response
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }

    /**
     * Build a error response
     * @param $message
     * @param  integer $code  Status Code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, int $code): JsonResponse
    {
        return response()->json(['error' => $message], $code);
    }

    /**
     * Return an error in JSON format
     * @param string $message
     * @param int $code
     * @return Illuminate\Http\Response
     * 
     */
    public function errorMessage(string $message, string $code)
    {
        return response($data, $code)->header('Content-Type', 'application/json');
    }
}
