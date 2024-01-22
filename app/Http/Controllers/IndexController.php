<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
        return inertia('Index/Index',
                [
                    'message' => 'Hello from Index'
                ]);
    }

    function show() {
        return inertia('Index/Show',
                        [
                            'message' => 'Hello from Show'
                        ]);
    }
}
