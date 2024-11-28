@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome, {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Mobile: {{ $user->mobile }}</p>
    <p>Address: {{ $user->address }}</p>
</div>
@endsection
