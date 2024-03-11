<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama'       => 'required|min:3|max:50',
            'alamat'     => 'max:100',
            'no_telepon' => 'required|max:13',
            'username'   => ['required', 'min:8', 'max:100', 'unique:users,username'],
            'password'   => 'min:6|required_with:password_confirmation|same:password_confirmation',
        ]);

        $validated = $validation->validated();

        $query = DB::table('users')->insert([
            'id'            => Uuid::uuid4(),
            'nama'          => $validated['nama'],
            'role'          => 'supplier',
            'no_telepon'    => $validated['no_telepon'],
            'alamat'        => $validated['alamat'],
            'foto'          => 'man.jpg',
            'username'      => $validated['username'],
            'point'          => '0',
            'password'      =>  Hash::make($validated['password']),
        ]);

        if ($query) {
            $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Login');
            return redirect('/login');
        }
    }

    public function edit()
    {
        return view('home.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $this->validate($request, [
            'nama'       => 'required|max:255',
            'no_telepon' => 'required|max:255',
            'alamat'     => 'required|max:255',
            'foto'       => 'sometimes',
        ]);

        if (isset($validated['foto'])) {
            $name = $validated['foto']->getClientOriginalName();
            $validated['foto']->storeAs('uploads/profil', $name, 'public');
            $validated['foto'] = $name;
            $input = $validated;
        } else {
            $input = $request->only('nama', 'no_telepon', 'alamat');
        }

        $user->update($input);

        return redirect('/supplier/dashboard');
    }
}
