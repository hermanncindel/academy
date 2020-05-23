<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayerController extends Controller
{
    public function payer()
    {
        return view('payer');
    }
}
