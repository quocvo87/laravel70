<?php namespace App\Http\Controllers;

use App\Transaction;

class TransactionController extends Controller
{
    public function get()
    {
        dd(Transaction::find(1));
    }
}
