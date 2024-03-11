<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use App\Models\RewardHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function edit()
    {
        return view('home.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'nama'       => 'required|max:255',
            'no_telepon' => 'required|max:255',
            'alamat'     => 'required|max:255',
        ]);

        $input = $request->only('nama', 'no_telepon', 'alamat');
        $user->update($input);

        return redirect('/supplier/dashboard');
    }

    // =====================================//
    // REWARD
    // =====================================//
    public function reward()
    {
        $rewards    = Reward::all();
        $koin       = Auth::user()->point;
        $history_rewards = RewardHistory::where('user_id', Auth::user()->id)->get();

        return view('supplier.reward', compact('koin', 'rewards', 'history_rewards'));
    }

    public function pilih_reward($id)
    {
        $reward     = Reward::find($id);
        $koin       = Auth::user()->point;

        return view('supplier.pilih-reward', compact('koin', 'reward'));
    }

    public function pilih_reward_history($id)
    {
        $koin       = Auth::user()->point;
        $reward     = RewardHistory::find($id);

        return view('supplier.pilih-reward-history', compact('koin', 'reward'));
    }

    public function tukar_reward(Request $request, $id)
    {
        $reward = Reward::find($request->reward_id);

        if ($reward->kategori == 'ewallet') {
            $validation = $this->validate($request, [
                'jumlah' => 'numeric|min:1000'
            ]);
        } else {
            $validation = $this->validate($request, [
                'jumlah' => 'numeric|min:1'
            ]);
        }

        if ($reward->kategori != 'ewallet') {
            $reward->update([
                'jumlah' => $reward->jumlah - $request->jumlah,
            ]);
        }

        Auth::user()->update([
            'point' => Auth::user()->point - $request->jumlah_tc,
        ]);

        if ($reward->kategori != 'ewallet') {
            $query = RewardHistory::create([
                'jumlah'    => $request->jumlah,
                'status'    => 'pending',
                'reward_id' => $request->reward_id,
                'user_id'   => Auth::user()->id,
            ]);
        } else {
            $query = RewardHistory::create([
                'jumlah'     => $request->jumlah,
                'status'     => 'pending',
                'no_ewallet' => $request->no_telepon,
                'reward_id'  => $request->reward_id,
                'user_id'    => Auth::user()->id,
            ]);
        }

        if ($query) {
            return redirect('/supplier/reward');
        } else {
            return redirect()->back();
        }
    }
}
