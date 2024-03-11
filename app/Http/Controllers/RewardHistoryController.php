<?php

namespace App\Http\Controllers;

use App\Models\RewardHistory;

class RewardHistoryController extends Controller
{
    public function admin()
    {
        $rewards            = RewardHistory::where('status', 'pending')->get();
        $rewards_history    = RewardHistory::where('status', 'selesai')->get();

        return view('admin.reward', compact('rewards', 'rewards_history'));
    }

    public function admin_edit($id)
    {
        $rewards    = RewardHistory::find($id);
        return view('admin.edit-reward', compact('rewards'));
    }

    public function admin_show($id)
    {
        $rewards    = RewardHistory::find($id);
        return view('admin.show-reward', compact('rewards'));
    }

    public function admin_update($id)
    {
        $rewards    = RewardHistory::find($id);
        $rewards->update([
            'status' => 'selesai'
        ]);

        return redirect('/admin/reward');
    }
}
