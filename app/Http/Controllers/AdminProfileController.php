<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{

    public function index()
    {
        return view('admin.profile');
    }

    public function update(Request $request)
    {

        $user = Auth::user();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'photo' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if($request->hasFile('photo'))
        {

            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('profile'), $filename);

            $user->photo = $filename;

        }

        $user->save();

        return redirect()->back()->with('success','Profile berhasil diupdate');

    }

}
