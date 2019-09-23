<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MooseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
    }

    public function index()
    {
        return response()->json(auth()->user()->mooses);
    }
}
