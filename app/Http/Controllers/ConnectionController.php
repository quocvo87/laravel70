<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function insert()
    {
        $trans = Transaction::create([
            'name' => 'Taylor' . now(),
            'text' => 'Otwell' . now(),
        ]);

        dd($trans);
    }
}
