@extends('layout.app')

@section('title', 'Inicio - Order Computing Store')
@section('subtitle', 'Welcome to Order Computing Store')

@section('content')
<div class="row justify-content-center mt-5">
  <div class="col-12 col-md-10 col-lg-8 text-center">
    <p class="lead mb-4">Choose the area you want to access:</p>
    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
      <a href="{{ route('order.index') }}" class="btn btn-primary btn-lg px-4 py-3">
        Order Creation
      </a>
      <a href="{{ route('order.list') }}" class="btn btn-success btn-lg px-4 py-3">
        Order List
      </a>
    </div>
  </div>
</div>
@endsection
