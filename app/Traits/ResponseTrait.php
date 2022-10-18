<?php

namespace App\Traits;

trait ResponseTrait{

    protected function success_message($data, $message = "", $status = 200){
        return response()->json([
            "data" => $data,
            "success" => true,
            "message" => $message,
        ], $status);
    }

    protected function error_message($message, $errors = [], $status = 422){
        return response()->json([
            "errors" => $errors,
            "success" => false,
            "message" => $message,
        ], $status);
    }
}
