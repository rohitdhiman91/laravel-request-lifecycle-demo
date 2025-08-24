<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(Request $request)
    {
        // Business logic happens here
        return response()->json([
            'message' => 'Hello from the Controller!',
            'url' => $request->fullUrl(),
            'method' => $request->method(),
        ]);
    }
}
