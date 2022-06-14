<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    } 

    public function store(Request $request)
    {
        User::create($request->only('name', 'lastname', 'age', 'email')
            + [
                'password' => bcrypt($request->input('password')),
            ]);
        return redirect()->back();
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $data=$request->only('name','lastname','age','email');
        if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else{
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }

        $user->update($data);
        return redirect()->back()->with('success', 'Datos Actualizados :D');
    }
}
