<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\CompanyProfile;

class ContactController extends Controller
{
    public function index()
    {

        $companyProfile = CompanyProfile::latest()->first();

        return view('user.contact.index', compact('companyProfile'));
    }

    public function send(Request $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success','Pesan berhasil dikirim!');
    }
}
