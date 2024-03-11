<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reward;
use App\Models\Katalog;
use App\Models\Tutorial;
use App\Models\SuperAdmin;
use App\Models\MediaInformasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function update_konten(Request $request, SuperAdmin $post)
    {
        $post = SuperAdmin::first();

        $this->validate($request, [
            'judul_halaman_awal'        => 'required',
            'konten_halaman_awal'       => 'required',
            'judul_tentang'             => 'required',
            'konten_tentang'            => 'required',
            'katalog_bahan_organik'     => 'sometimes',
            'katalog_bahan_anorganik'   => 'sometimes',
            'katalog_bahan_b3'          => 'sometimes',
            'judul_berita'              => 'sometimes',
            'foto_berita'               => 'sometimes',
            'keterangan_berita'         => 'sometimes',
        ]);

        $post->update([
            'judul_halaman_awal'        => $request->judul_halaman_awal,
            'konten_halaman_awal'       => $request->konten_halaman_awal,
            'judul_tentang'             => $request->judul_tentang,
            'konten_tentang'            => $request->konten_tentang,
            'katalog_bahan_organik'     => $request->katalog_bahan_organik,
            'katalog_bahan_anorganik'   => $request->katalog_bahan_anorganik,
            'katalog_bahan_b3'          => $request->katalog_bahan_b3,
            'judul_berita'              => $request->judul_berita,
            'foto_berita'               => $request->foto_berita,
            'keterangan_berita'         => $request->keterangan_berita,
        ]);

        return redirect()->back();
    }

    public function store_admin(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama'          => 'required|min:3|max:50',
            'alamat'        => 'max:100',
            'no_telepon'    => 'required|maSx:13',
            'username'      => ['required', 'min:8', 'max:100', 'unique:users,username'],
            'password'      => 'min:6|required_with:password_confirmation|same:password_confirmation',
        ]);

        $validated = $validation->validated();

        $query = DB::table('users')->insert([
            'id'            => Uuid::uuid4(),
            'role'          => 'admin',
            'nama'          => $validated['nama'],
            'no_telepon'    => $validated['no_telepon'],
            'alamat'        => $validated['alamat'],
            'foto'          => 'man.jpg',
            'username'      => $validated['username'],
            'point'          => '0',
            'password'      =>  Hash::make($validated['password']),
        ]);

        if ($query) {
            $request->session()->flash('success', 'Admin berhasil ditambahkan!');
            return redirect()->back();
        }
    }

    //Tutorial
    public function store_tutorial(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'judul'     => 'required|min:3|max:100',
            'konten'    => 'required',
            'kategori'  => 'required',
            'gambar'    => 'sometimes',
        ]);

        $validated = $validation->validated();

        if (isset($validated['gambar'])) {
            $name   = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/tutorial/', $name, 'public');
            $validated['gambar'] = $name;
            $input  = $validated;
        }

        $query = DB::table('tutorial')->insert([
            'judul'     => $validated['judul'],
            'konten'    => $validated['konten'],
            'gambar'    => $validated['gambar'],
            'kategori'  => $validated['kategori'],
        ]);

        if ($query) {
            $request->session()->flash('success', 'Tutorial berhasil ditambahkan!');
            return redirect()->back();
        }
    }

    public function data_landing_page()
    {
        if (Auth::check()) {

            $post = SuperAdmin::first();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.landing-page.edit', compact('post'));
        } else {
            return redirect('/login');
        }
    }

    public function data_admin()
    {
        if (Auth::check()) {

            $admin = User::where('role', 'admin')->get();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.admin.index', compact('admin'));
        } else {
            return redirect('/login');
        }
    }

    public function edit_admin($id)
    {
        if (Auth::check()) {

            $admin = User::where('id', $id)->first();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.admin.edit', compact('admin'));
        } else {
            return redirect('/login');
        }
    }

    public function update_admin(Request $request)
    {
        $user = User::find($request->id);

        $validated = $this->validate($request, [
            'nama'          => 'required|min:3|max:50',
            'alamat'        => 'max:100',
            'no_telepon'    => 'required|max:13',
            'username'      => ['required', 'min:4', 'max:100'],
            'password'      => 'min:4|required_with:password_confirmation|same:password_confirmation',
        ]);

        $user->update($validated);
        $request->session()->flash('success', 'Update Admin Berhasil!');

        return redirect()->back();
    }

    public function data_media_informasi()
    {
        if (Auth::check()) {

            $media_informasi = MediaInformasi::all();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.media-informasi.index', compact('media_informasi'));
        } else {
            return redirect('/login');
        }
    }


    public function edit_media_informasi($id)
    {
        if (Auth::check()) {

            $media_informasi = MediaInformasi::where('id', $id)->first();

            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.media-informasi.edit', compact('media_informasi'));
        } else {
            return redirect('/login');
        }
    }

    public function update_media_informasi(Request $request)
    {
        $media_informasi = MediaInformasi::find($request->id);

        $validated = $this->validate($request, [
            'judul'     => 'required|min:3|max:100',
            'konten'    => 'required',
            'gambar'    => 'sometimes|max:2048|mimes:png,jpg,jpeg',
        ]);

        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/media-informasi/', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        $query = $media_informasi->update($validated);
        if ($query) {
            $request->session()->flash('success', 'Tutorial berhasil diedit!');
        } else {
            $request->session()->flash('error', 'Terdapat kesalahan pada query!');
        }

        return redirect()->back();
    }

    public function store_media_informasi(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'judul'  => 'required|min:3|max:100',
            'konten' => 'required',
            'gambar' => 'sometimes',
        ]);

        $validated = $validation->validated();
        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/media-informasi/', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        $query = DB::table('media_informasi')->insert([
            'judul'     => $validated['judul'],
            'konten'    => $validated['konten'],
            'gambar'    => $validated['gambar'],
        ]);

        if ($query) {
            $request->session()->flash('success', 'Media Informasi berhasil ditambahkan!');
            return redirect()->back();
        }
    }

    public function data_tutorial()
    {
        if (Auth::check()) {

            $tutorial = Tutorial::all();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.tutorial.index', compact('tutorial'));
        } else {
            return redirect('/login');
        }
    }


    public function edit_tutorial($id)
    {
        if (Auth::check()) {

            $tutorial = Tutorial::where('id', $id)->first();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.tutorial.edit', compact('tutorial'));
        } else {
            return redirect('/login');
        }
    }

    public function update_tutorial(Request $request)
    {
        $tutorial   = Tutorial::find($request->id);
        $validated  = $this->validate($request, [
            'judul'     => 'required|min:3|max:100',
            'konten'    => 'required',
            'kategori'  => 'required',
            'gambar'    => 'sometimes|max:2048|mimes:png,jpg,jpeg',
        ]);

        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/tutorial/', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        $query = $tutorial->update($validated);
        if ($query) {
            $request->session()->flash('success', 'Tutorial berhasil diedit!');
        } else {
            $request->session()->flash('error', 'Terdapat kesalahan pada query!');
        }
        return redirect()->back();
    }

    public function data_reward()
    {
        if (Auth::check()) {

            $reward = Reward::all();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.reward.index', compact('reward'));
        } else {
            return redirect('/login');
        }
    }


    public function edit_reward($id)
    {
        if (Auth::check()) {

            $reward = reward::where('id', $id)->first();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.reward.edit', compact('reward'));
        } else {
            return redirect('/login');
        }
    }

    public function update_reward(Request $request)
    {
        $reward     = reward::find($request->id);
        $validated  = $this->validate($request, [
            'nama'      => 'required|min:3|max:100',
            'jumlah'    => 'required',
            'koin'      => 'required',
            'kategori'  => 'required',
            'gambar'    => 'sometimes|max:2048|mimes:png,jpg,jpeg',
        ]);


        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/reward', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        $query = $reward->update($validated);
        if ($query) {
            $request->session()->flash('success', 'Reward berhasil diedit!');
        } else {
            $request->session()->flash('error', 'Terdapat kesalahan pada query!');
        }

        return redirect()->back();
    }

    public function store_reward(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama'      => 'required|min:3|max:100',
            'jumlah'    => 'required',
            'koin'      => 'required',
            'kategori'  => 'required',
            'gambar'    => 'sometimes|max:2048|mimes:png,jpg,jpeg',
        ]);

        $validated = $validation->validated();
        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/reward', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        $query = DB::table('reward')->insert([
            'nama'      => $validated['nama'],
            'koin'      => $validated['koin'],
            'jumlah'    => $validated['jumlah'],
            'gambar'    => $validated['gambar'],
            'kategori'  => $validated['kategori'],
        ]);

        if ($query) {
            $request->session()->flash('success', 'Reward berhasil ditambahkan!');
            return redirect()->back();
        }
    }

    public function data_katalog()
    {
        if (Auth::check()) {

            $katalog = katalog::all();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.katalog.index', compact('katalog'));
        } else {
            return redirect('/login');
        }
    }

    public function edit_katalog($id)
    {
        if (Auth::check()) {

            $katalog = katalog::where('id', $id)->first();
            if (Auth::user()->role != 'super_admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('super-admin.katalog.edit', compact('katalog'));
        } else {
            return redirect('/login');
        }
    }

    public function update_katalog(Request $request)
    {
        $katalog    = katalog::find($request->id);
        $validated  = $this->validate($request, [
            'nama'      => 'required|min:3|max:50',
            'deskripsi' => 'required',
            'kuantitas' => 'required',
            'kategori'  => 'required',
            'gambar'    => 'sometimes|max:2048|mimes:png,jpg,jpeg',
        ]);

        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/katalog/', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        $query = $katalog->update($validated);

        if ($query) {
            $request->session()->flash('success', 'Katalog berhasil diedit!');
        } else {
            $request->session()->flash('error', 'Terdapat kesalahan pada query!');
        }

        return redirect()->back();
    }

    public function store_katalog(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama'      => 'required|min:3|max:50',
            'deskripsi' => 'required',
            'gambar'    => 'sometimes|max:2048|mimes:png,jpg,jpeg',
            'kuantitas' => 'required',
            'kategori'  => 'required',
        ]);

        $validated = $validation->validated();

        if (isset($validated['gambar'])) {
            $name = $validated['gambar']->getClientOriginalName();
            $validated['gambar']->storeAs('uploads/katalog/', $name, 'public');
            $validated['gambar'] = $name;
            $input = $validated;
        }

        $query = DB::table('katalog')->insert([
            'nama'      => $validated['nama'],
            'gambar'    => $validated['gambar'],
            'kategori'  => $validated['kategori'],
            'deskripsi' => $validated['deskripsi'],
            'kuantitas' => $validated['kuantitas'],
        ]);

        if ($query) {
            $request->session()->flash('success', 'katalog berhasil ditambahkan!');
            return redirect()->back();
        }
    }
}
