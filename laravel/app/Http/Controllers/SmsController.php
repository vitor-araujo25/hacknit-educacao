<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index()
    {
        return view('aluno');
    }

    public function sendSms()
    {
        return view('home');
    }
}
