<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSettingController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('pages.dashboard-account',[
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $item = Auth::user();

        $item->update($data);

        return redirect()->route('dashboard-account');
    }
}
