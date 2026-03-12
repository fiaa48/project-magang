<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class AdminContactController extends Controller
{

    public function index()
    {
        $messages = Contact::latest()->get();

        return view('admin.contacts', compact('messages'));
    }

}
