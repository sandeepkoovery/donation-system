@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('donate.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="amount">Donate Amount ($):</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
        </div>
        <script src="https://js.stripe.com/v3/"></script>
        <button class="btn btn-primary">Donate</button>
    </form>
</div>
@endsection
