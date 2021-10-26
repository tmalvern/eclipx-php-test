@extends('layouts.app')   

@section('content')
<div class="container mt-5">
    <div class="row p-3">
        <div class="col-md-8"><h1>Invoice Number: {{$invoice_no}}</h1></div>
        <div class="col-md-4"><h1 class="text-right">Date: {{ format_date($invoice_totals->invoiced) }}</h1></div>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th width="15%">Description</th>
            <th width="14%">Amount Net</th>
            <th width="10%" style="text-align: right;">Amount GST</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($invoice_data as $invoice)
                <tr>
                    <td>{{ $invoice->description }}</td>
                    <td>${{ format_currency($invoice->amount_net) }}</td>
                    <td align="right">${{ format_currency($invoice->amount_gst) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-striped table-hover table-bordered">
        <tbody>
                <tr>
                    <td width="73%" colspan="2"><b>Totals</b></td>
                    
                </tr>
                <tr>
                    <td width="73%" >Total Amount Net</td>
                    <td width="25%" align="right">${{ format_currency($invoice_totals->total_amount_net) }}</td>
                </tr>
                <tr>
                    <td width="73%">Total Amount GST</td>
                    <td width="25%" align="right">${{ format_currency($invoice_totals->total_amount_gst) }}</td>
                </tr>

                <tr>
                    <td width="73%">Total</td>
                    <td width="25%" align="right">${{ format_currency($grand_total) }}</td>
                </tr>

        </tbody>
    </table>
</div>
@endsection