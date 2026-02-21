@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Delete order</div>
            </div>
            <div class="card-footer">
                <a href="{{ route('order.list') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection