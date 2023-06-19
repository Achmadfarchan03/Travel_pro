<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request) 
    {
        $data=Transaction::select(
            DB::raw("count(*) as cnt"),
            DB::raw("date(created_at) as creation_date"),
        )->groupBy(DB::raw("creation_date"))->get();

        return view('pages.admin.dashboard', [
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
            'data'=> $data
        ]);
    }
}
