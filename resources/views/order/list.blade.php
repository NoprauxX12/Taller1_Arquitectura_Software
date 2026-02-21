@extends('layout.app')

@section('title', 'Order List - Order Computing Store')
@section('subtitle', 'Order list')

@section('content')
<div class="row">
    @foreach($viewData["Orders"] as $order)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $order->getId() }}</h5>
                <p class="card-text">Total: {{ $order->getTotal() }}</p>
                <p class="card-text">Status: {{ $order->getStatus() }}</p>
                <p class="card-text">Can be cancelled: {{ $order->getCanBeCancelled() ? 'Yes' : 'No' }}</p>
                <a href="{{ route('order.show', ['id' => $order->getId()]) }}" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection