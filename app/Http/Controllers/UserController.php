<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/user');
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
        return redirect('/user');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user');
    }
}
