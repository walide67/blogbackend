<?php

namespace App\Http\Controllers;

use App\Services\NgBuildService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('angular');
    }
}
