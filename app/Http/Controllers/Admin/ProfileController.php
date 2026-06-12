<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil user yang sedang login
        return view('admin.profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'whatsapp' => ['nullable', 'string', 'max:20'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // Simpan whatsapp
        $user->whatsapp = $request->whatsapp;

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($user->photo && Storage::exists('profile/' . $user->photo)) {
                Storage::delete('profile/' . $user->photo);
            }
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('profile', $filename, 'public');
            $user->photo = $filename;
        }

        $user->save();

        return redirect()->route('admin.profile.index')->with('success', 'Profil berhasil diperbarui.');
    }
}
