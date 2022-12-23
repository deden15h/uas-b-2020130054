@extends('layouts.master')

@section('title', 'Pesan Barang')

@section('content')

    <h2>Pesan Barang</h2>
    <form action="{{ route('order.createOrder') }}" method="POST">
        @csrf

        <div class="col-md-6 mb-3"> <label for="id">ID</label> <input type="number"
                class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                value="{{ old('id') }}">
            @error('id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3"> <label for="quantity">Quantity</label> <input type="number"
                class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity"
                value="{{ old('quantity') }}"> @error('quantity')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3"> <label for="status">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" id="status"
                value="{{ old('status') }}"> @error('status')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
</form> @endsection
