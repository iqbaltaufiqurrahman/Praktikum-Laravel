<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transactions;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index ()
    {
        $transactions = Transactions::all();
        return view('mtransactions', compact('transactions'));
        //return $transactions;
        //return view('mtransactions');
    }
}
