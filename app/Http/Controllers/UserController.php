<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/user')->with('success', 'Data user berhasil ditambahkan.');
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'role' => $request->role,
            'password' => $request->password
        ]);
        return redirect('/user')->with('success', 'Data user berhasil diperbarui.');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user')->with('warning', 'Data user telah dihapus.');
    }
}
