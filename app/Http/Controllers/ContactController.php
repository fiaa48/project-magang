<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function send(Request $request)
    {
        // sementara dump dulu buat ngetes
        return back()->with('success', 'Pesan berhasil dikirim');
    }
}
