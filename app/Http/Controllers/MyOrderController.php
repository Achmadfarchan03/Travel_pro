<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TravelPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOrderController extends Controller
{
    public function index(Request $request) 
    {
        $items = Transaction::with([
            'details', 'travel_package', 'user'
        ])->where('users_id', Auth::user()->id)->get();

        return view('pages.my-order', [
            'items' => $items
        ]);
    }
}
