@extends('layouts.app')   

@section('content')
<div class="container mt-5">
    <h1>Invoice Number: {{$invoice_no}}</h1>
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
                    <td>${{ number_format($invoice->amount_net, 2, '.', ',') }}</td>
                    <td align="right">${{ number_format($invoice->amount_gst, 2, '.', ',') }}</td>
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
                    <td width="25%" align="right">${{ number_format($invoice_totals->total_amount_net, 2, '.', ',') }}</td>
                </tr>
                <tr>
                    <td width="73%">Total Amount GST</td>
                    <td width="25%" align="right">${{ number_format($invoice_totals->total_amount_gst, 2, '.', ',') }}</td>
                </tr>

                <tr>
                    <td width="73%">Total</td>
                    <td width="25%" align="right">${{ number_format($grand_total, 2, '.', ',')}}</td>
                </tr>

        </tbody>
    </table>
</div>
@endsection