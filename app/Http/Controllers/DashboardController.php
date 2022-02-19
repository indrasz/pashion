<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        return view('pages.dashboard');
    // ,[
    //     'transaction_count' => $transactions->count(),
    //     'transaction_data' => $transactions->get(),
    //     'revenue' => $revenue,
    //     'customer' => $customer,
    // ]
    }
}
