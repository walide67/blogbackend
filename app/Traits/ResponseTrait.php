<?php

namespace App\Traits;

trait ResponseTrait{

    private function success_message($data, $message = "", $status = 200){
        return response()->json([
            "success" => true,
            "data" => $data,
            "message" => $message,
        ], $status);
    }

    private function error_message($message, $errors = [], $status = 422){
        return response()->json([
            "success" => false,
            "errors" => $errors,
            "message" => $message,
        ], $status);
    }
}
