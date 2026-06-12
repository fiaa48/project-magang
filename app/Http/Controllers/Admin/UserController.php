<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $users = User::when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']); // sebaiknya di-hash
        }

        // Simpan whatsapp (jika ada)
        $user->whatsapp = $request->whatsapp ?? null;

        $user->save();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Data user berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        if (Auth::id() === $user->id) {
            return redirect()
                ->route('admin.users.index')
                ->with('error', 'Akun yang sedang login tidak bisa dihapus.');
        }

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}
