<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::select(
            'id',
            'invoiced',
            'invoice_no',
            'client_id',
            DB::raw("(COUNT(DISTINCT(contract_id))) AS total_contracts_billed"),
            DB::raw("(SUM(amount_net)) AS total_amount_net"),
            DB::raw("(SUM(amount_gst)) AS total_amount_gst")
        )->groupBy('invoice_no')
        ->get();
        
        return view('invoices.index', ['invoices' => $invoices]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $invoice_no
     * @return \Illuminate\Http\Response
     */
    public function show($invoice_no)
    {
        $invoice_data = Invoice::where('invoice_no', $invoice_no)->get();
        $invoice_totals = Invoice::select(
            'invoiced',
            DB::raw("(SUM(amount_net)) AS total_amount_net"),
            DB::raw("(SUM(amount_gst)) AS total_amount_gst")
        )->where('invoice_no', $invoice_no)
        ->first();
        $grand_total = $invoice_totals->total_amount_gst + $invoice_totals->total_amount_net;

        return view('invoices.show', ['invoice_data' => $invoice_data, 'invoice_totals' => $invoice_totals, 'invoice_no' => $invoice_no, 'grand_total' => $grand_total]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
