<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        return view('admin.home.index', compact('home'));
    }

    public function edit()
    {
        $home = Home::first();
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request)
    {
        $home = Home::first();

        if (!$home) {
            $home = Home::create($request->all());
        } else {
            $home->update($request->all());
        }

        return redirect()->route('admin.home.index')
            ->with('success', 'Data Home berhasil diupdate');
    }

    public function destroy()
    {
        $home = Home::first();

        if ($home) {
            $home->delete();
        }

        return redirect()->route('admin.home.index')
            ->with('success', 'Data Home berhasil dihapus');
    }
}
