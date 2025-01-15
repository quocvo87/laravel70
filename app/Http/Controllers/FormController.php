<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function token(Request $request)
    {
        if ($request->isMethod('POST')) {
            
            return view('form.token', ['old' => ['csrfName' => $request->csrfName]]);
        }
        return view('form.token');
    }
}
