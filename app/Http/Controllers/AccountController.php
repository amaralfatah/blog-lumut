<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('accounts.index', compact('users'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:45',
            'name' => 'required|max:45',
            'password' => 'required|min:8',
            'role' => 'required|max:45',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'role' => $request->role,
        ]);

        return redirect()->route('accounts.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('accounts.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:45',
            'password' => 'nullable|min:8',
            'role' => 'required|max:45',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->role = $request->role;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('accounts.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('accounts.index');
    }
}
