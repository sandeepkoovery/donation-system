<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = auth()->user()->transactions()->orderBy('transaction_date', 'desc')->get();

        return view('transactions.index', compact('transactions'));
    }
}