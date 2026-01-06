<?php

namespace App\Exceptions\Api;

use Exception;
use Illuminate\Http\JsonResponse;

class ApiException extends Exception
{
    protected int $statusCode;
    protected array $errors;

    public function __construct(string $message = 'API Error', int $statusCode = 400, array $errors = [])
    {
        parent::__construct($message);
        $this->statusCode = $statusCode;
        $this->errors = $errors;
    }

    public function render(): JsonResponse
    {
        $response = [
            'status' => 'error',
            'message' => $this->getMessage(),
            'code' => $this->statusCode
        ];

        if (!empty($this->errors)) {
            $response['errors'] = $this->errors;
        }

        return response()->json($response, $this->statusCode);
    }
}