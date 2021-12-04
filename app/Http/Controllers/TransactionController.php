<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use App\Http\Requests\StoretransactionRequest;
use App\Http\Requests\UpdatetransactionRequest;
use Illuminate\Http\Request;
use DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretransactionRequest $request)
    {
        $transac = new transaction();

        $data = $request->only('category-type');

        $transac->transac_type = $data['transacType'];
        $transac->category = $data['category'];
        $transac->transac_date = $data['transacDate'];
        $transac->amount = $data['totalAmount'];

        $transac->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $category = $req->only('category');
        $temp = $category['category'];
        $transacData = DB::select("SELECT * FROM transactions WHERE category = ?", [$temp]);
        $totalExpense = DB::table('transactions')->where('transac_type', 1)->sum('amount');
        return view('expense', ['transacData' => $transacData,
                                    'totalExpense' => $totalExpense
                                    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetransactionRequest  $request
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetransactionRequest $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
