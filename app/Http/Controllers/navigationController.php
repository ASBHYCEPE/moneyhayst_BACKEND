<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class navigationController extends Controller
{
    public function main(){

        $totalIncome = DB::table('transactions')->where('transac_type', 0)->sum('amount');
        $totalExpense = DB::table('transactions')->where('transac_type', 1)->sum('amount');
        $totalBalance = $totalIncome - $totalExpense;

        return view('index',['totalIncome' => $totalIncome, 
                             'totalExpense' => $totalExpense,
                             'totalBalance' => $totalBalance
                            ]);
    }

    public function income(){
        return view('income');
    }

    public function expense(){
        return view('expense');
    }
}
