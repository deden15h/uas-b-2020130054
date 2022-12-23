@extends('layouts.master')

@section('title', 'Items List')

@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
    @endpush @section('content') <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Items List</h2>
                    </div>
                    {{-- <div class="col-sm-6">
                        <a href="{{ route('items.create') }}" class="btn btn-success">
                            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            <span align="right">Add New Item</span>
                        </a>
                    </div> --}}

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><a href="{{ route('items.show', $item->id) }}"> {{ $item->id }} </a></td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->stok }}</td>
                            </tr> @empty <tr>
                                    <td align="center" colspan="6">No data yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
        </div> @endsection
