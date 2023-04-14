<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * jsonSuccess
     * 
     * Trait to send success response in json format
     * 
     * @param string $message
     * @param mixed $data
     * @param int $status_code
     * @return JsonResponse
     */
    protected function jsonSuccess(String $message, $data = null, int $status_code = 200) : JsonResponse
    {
        return response()->json([
            "success" => true,
            "message" => $message,
            "data" => $data,
            "status" => "OK"
        ], $status_code);
    }

    /**
     * jsonCreated
     * 
     * Trait to send the created response in json format
     * 
     * @param string $message
     * @param mixed $data
     * @param int $status_code
     * @return JsonResponse
     */
    protected function jsonCreated(String $message, $data = null, int $status_code = 201) : JsonResponse
    {
        return response()->json([
            "success" => true,
            "message" => $message,
            "data" => $data,
            "status" => "Created"
        ], $status_code);
    }

    /**
     * jsonErrorValidate
     * 
     * Trait to send validation error response in json format
     * 
     * @param string $message
     * @param mixed $errors
     * @return JsonResponse
     */
    protected function jsonErrorValidate(String $message, $errors = null) : JsonResponse
    {
        return response()->json([
            "success" => false,
            "message" => $message,
            "errors" => $errors,
            "status" => "Bad Request"
        ]);
    }

    /**
     * jsonFail
     * 
     * Trait to send fail response in json format
     * 
     * @param string $message
     * @param mixed $error
     * @param int $status_code
     * @return JsonResponse
     */
    protected function jsonFail(String $message, $error = null) : JsonResponse
    {
        return response()->json([
            "success" => false,
            "message" => $message,
            "error" => $error,
            "status" => "Inconvenient"
        ]);
    }
}
