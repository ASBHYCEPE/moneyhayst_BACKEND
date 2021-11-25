<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class navigationController extends Controller
{
    public function main(){

        $transacData = DB::select('SELECT * FROM transactions ORDER BY transac_date DESC LIMIT 5');
        $totalIncome = DB::table('transactions')->where('transac_type', 0)->sum('amount');
        $totalExpense = DB::table('transactions')->where('transac_type', 1)->sum('amount');
        $totalBalance = $totalIncome - $totalExpense;

        return view('index',['totalIncome' => $totalIncome, 
                             'totalExpense' => $totalExpense,
                             'totalBalance' => $totalBalance,
                             'transacData' => $transacData
                            ]);
    }

    public function income(){
        return view('income');
    }

    public function expense(){
        return view('expense');
    }
}
