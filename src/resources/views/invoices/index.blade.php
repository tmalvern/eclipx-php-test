@extends('layouts.app')   

@section('content')
<div class="container mt-5">
    <h1>Summary of the Invoices</h1>
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
                    <td>${{ number_format($invoice->total_amount_net, 2, '.', ',') }}</td>
                    <td>${{ number_format($invoice->total_amount_gst, 2, '.', ',') }}</td>
                    <td>{{ date('d-m-Y', strtotime($invoice->invoiced))}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection