<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function get_languages(){
        $languages = config('blog.languages', []);

        return $this->success_message($languages);
    }
}
