@extends('layouts.app')   

@section('content')
<div class="container mt-5">
    <div class="row p-3">
        <div class="col-md-8"> <h1>Summary of the Invoices</h1></div>
        <div class="col-md-4"></div>
    </div>
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col" width="10%">Invoice Number</th>
            <th scope="col" width="15%">Client Id</th>
            <th scope="col" width="15%">Number of Contracts Billed</th>
            <th scope="col" width="10%">Total Amount Net</th>
            <th scope="col" width="10%">Total Amount GST</th>
            <th scope="col" width="10%">Invoice Date</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <th scope="row"><a href='{{url("/invoices/{$invoice->invoice_no}")}}'>{{ $invoice->invoice_no}}</a></th>
                    <td>{{ $invoice->client_id }}</td>
                    <td>{{ $invoice->total_contracts_billed }}</td>
                    <td>${{ format_currency($invoice->total_amount_net) }}</td>
                    <td>${{ format_currency($invoice->total_amount_gst) }}</td>
                    <td>{{ format_date($invoice->invoiced)}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection