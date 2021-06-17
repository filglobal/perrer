<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    /**
     * Send email
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function send(Request $request)
    {
        dd($request->all());
    }
}
