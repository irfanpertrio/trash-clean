<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Models\Tutorial;
use App\Models\SuperAdmin;
use App\Models\MediaInformasi;

class GuestController extends Controller
{
    public function tentang()
    {
        $post = SuperAdmin::first();
        return view('tentang.index', compact('post'));
    }

    public function katalog()
    {
        $katalog = Katalog::all();
        return view('katalog.index', compact('katalog'));
    }

    public function katalog_show($id)
    {
        $katalog = Katalog::find($id);
        return view('katalog.show', compact('katalog'));
    }

    public function kontak()
    {
        $post = SuperAdmin::first();
        return view('kontak.index', compact('post'));
    }

    public function media_informasi()
    {
        $media_informasi = MediaInformasi::get();
        return view('media-informasi.index', compact('media_informasi'));
    }

    public function media_informasi_show($id)
    {
        $media_informasi = MediaInformasi::find($id);
        return view('media-informasi.show', compact('media_informasi'));
    }

    public function tutorial()
    {
        $tutorial = Tutorial::get();
        return view('tutorial.index', compact('tutorial'));
    }

    public function tutorial_detail($id)
    {
        $tutorial = Tutorial::where('id', '=', $id)->first();
        return view('tutorial.detail', compact('tutorial'));
    }
}
