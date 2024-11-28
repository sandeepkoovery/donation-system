@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Transaction History</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->transaction_date }}</td>
                <td>${{ $transaction->amount }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
