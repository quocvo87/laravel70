<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveVariableController extends Controller
{
    public function index(Request $request)
    {
        if (!$user = $request->get('user')) {
            return false;
        }

        var_dump($user);
        return $user;
    }
}
