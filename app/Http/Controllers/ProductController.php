<?php

namespace App\Http\Controllers;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $user = DB::select('select * from users');

            foreach ($user as $key => $value) {
                $notification_jemput[$key] =
                    DB::select("select * from products where user_id = '$value->id' and status_barang = 'dijemput'");
                $notification_antar[$key] =
                    DB::select("select * from products where user_id = '$value->id' and status_barang = 'diantar'");
                $notification_history[$key] =
                    DB::select("select * from products where user_id = '$value->id' and status_barang = 'valid'");
            }

            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('notifikasi.index', compact('notification_jemput', 'notification_antar', 'notification_history', 'user'));
        } else {
            return redirect('/login');
        }
    }

    public function store(Request $request)
    {
        if ($request->organik != 0) {
            DB::table('products')->insert([
                'user_id'       => Auth::user()->id,
                'id'            => Uuid::uuid4(),
                'nama_barang'   => 'Sampah Organik',
                'jumlah_barang' => $request->organik,
                'status_barang' => $request->status,
                'trashcoin_didapat'  => '0',
                'trashcoin_sekarang' => Auth::user()->point,
            ]);
        }

        if ($request->anorganik != 0) {
            DB::table('products')->insert([
                'user_id'       => Auth::user()->id,
                'id'            => Uuid::uuid4(),
                'nama_barang'   => 'Sampah Anorganik',
                'jumlah_barang' => $request->anorganik,
                'status_barang' => $request->status,
                'trashcoin_didapat'  => '0',
                'trashcoin_sekarang' => Auth::user()->point,
            ]);
        }

        if ($request->B3 != 0) {
            DB::table('products')->insert([
                'user_id'       => Auth::user()->id,
                'id'            => Uuid::uuid4(),
                'nama_barang'   => 'Sampah B3',
                'jumlah_barang' => $request->B3,
                'status_barang' => $request->status,
                'trashcoin_didapat'  => '0',
                'trashcoin_sekarang' => Auth::user()->point,
            ]);
        }

        return redirect(Auth::user()->role . '/dashboard');
    }

    public function show($id)
    {
        if (Auth::check()) {

            $user               = User::find($id);
            $products_history   = DB::select("select * from products where user_id = '$user->id' and status_barang = 'valid' order by created_at");

            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('notifikasi.show-history', compact('products_history', 'user'));
        } else {
            return redirect('/login');
        }
    }

    public function edit_antar($id)
    {
        if (Auth::check()) {

            $user       = User::find($id);
            $products   = DB::select("select * from products where user_id = '$user->id' and status_barang = 'diantar'");

            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('notifikasi.show', compact('products', 'user'));
        } else {
            return redirect('/login');
        }
    }

    public function edit_jemput($id)
    {
        if (Auth::check()) {

            $user       = User::find($id);
            $products   = DB::select("select * from products where user_id = '$user->id' and status_barang = 'dijemput'");

            if (Auth::user()->role != 'admin') {
                return redirect('/' . Auth::user()->role . '/dashboard');
            }

            return view('notifikasi.show', compact('products', 'user'));
        } else {
            return redirect('/login');
        }
    }

    public function update(Request $request)
    {
        $validated = $this->validate($request, [
            'user_id'           => 'required',
            'organik'           => 'required_with:Sampah_Organik|nullable',
            'anorganik'         => 'required_with:Sampah_Anorganik|nullable',
            'B3'                => 'required_with:Sampah_B3|nullable',
            'Sampah_Organik'    => 'required_with:organik|nullable',
            'Sampah_Anorganik'  => 'required_with:anorganik|nullable',
            'Sampah_B3'         => 'required_with:B3|nullable',
            'trashcoin'         => 'required',
        ]);

        $user       = User::find($validated['user_id']);
        $products   = Products::where('user_id', $validated['user_id'])->whereIn('status_barang', ['diantar', 'dijemput'])->get();

        $user->update(['point' => $user->point + $validated['trashcoin']]);

        foreach ($products as $key => $product) {
            if ($product->nama_barang == 'Sampah Organik') {
                if (isset($validated['Sampah_Organik'])) {
                    $product->update([
                        'jumlah_barang'      => $validated['organik'],
                        'status_barang'      => $validated['Sampah_Organik'],
                        'trashcoin_didapat'  => $validated['trashcoin'],
                        'trashcoin_sekarang' => $user->point,
                    ]);
                } else {
                    $product->update([
                        'status_barang'      => 'not valid',
                    ]);
                }
            } else if ($product->nama_barang == 'Sampah Anorganik') {
                if (isset($validated['Sampah_Anorganik'])) {
                    $product->update([
                        'jumlah_barang'      => $validated['anorganik'],
                        'status_barang'      => $validated['Sampah_Anorganik'],
                        'trashcoin_didapat'  => $validated['trashcoin'],
                        'trashcoin_sekarang' => $user->point,
                    ]);
                } else {
                    $product->update([
                        'status_barang'      => 'not valid',
                    ]);
                }
            } else if ($product->nama_barang == 'Sampah B3') {
                if (isset($validated['Sampah_B3'])) {
                    $product->update([
                        'jumlah_barang'      => $validated['B3'],
                        'status_barang'      => $validated['Sampah_B3'],
                        'trashcoin_didapat'  => $validated['trashcoin'],
                        'trashcoin_sekarang' => $user->point,
                    ]);
                } else {
                    $product->update([
                        'status_barang'      => $validated['not valid']
                    ]);
                }
            }
        }

        $request->session()->flash('success', 'Request berhasil diupdate!');

        return redirect('/admin/notification/');
    }
}
