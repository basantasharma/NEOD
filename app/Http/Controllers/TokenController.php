<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class TokenController extends Controller
{
    public function tokenGenerate()
    {

        $token = PersonalAccessToken::latest()->first();
        $data = compact('token');
        return view('token')->with($data);
        ;
    }
}
