@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order details</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $viewData['Order']->getId() }}</h5>
                    <p class="card-text">Total: {{ $viewData['Order']->getTotal() }}</p>
                    <p class="card-text">Status: {{ $viewData['Order']->getStatus() }}</p>
                    <p class="card-text">Can be cancelled: {{ $viewData['Order']->getCanBeCancelled() ? 'Yes' : 'No' }}</p>
                    <p class="card-text">Created at: {{ $viewData['Order']->getCreatedAt() }}</p>
                    <p class="card-text">Updated at: {{ $viewData['Order']->getUpdatedAt() }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('order.list') }}" class="btn btn-primary">Back</a>
                    <a href='{{ route('order.delete', ['id' => $viewData['Order']->getId()]) }}' class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection