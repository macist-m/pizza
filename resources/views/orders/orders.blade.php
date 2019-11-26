@extends('layouts.app')

@section('content')

    <div class="row mb-1">

        <div class="col">
            <h4>Siparişler</h4>
        </div>
        
        <div class="col text-right">
            <a href="/orders" class="btn btn-info btn-sm" role="button">
               Tümü
            </a>
            <a href="/orders/?delivered=1" class="btn btn-secondary btn-sm" role="button">
                Teslim Edilenler
            </a>
            <a href="/orders/?delivered=0" class="btn btn-secondary btn-sm" role="button">
                Teslim Bekleyen
            </a>
            <a href="/orders/create" class="btn btn-success btn-sm" role="button">
                Yeni Sipariş
            </a>
        </div>

    </div>

    <div class="row mb-2">

        <div class="col-3">
            <form action="/orders" method="get">
                <input type="search" name="search" class="form-control form-control-sm" placeholder="Ara...">
            </form>
        </div>

    </div>
    
    <table class="table table-striped">

        <thead>
            <tr>
                <th>Müşteri</th>
                <th>Adres</th>
                <th class="text-center">Pizza Adet</th>
                <th>Sipariş Durumu</th>
                <th>Tarih</th>
                <th></th>
            </tr>
        </thead>

        <tbody>

        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->customer_name }}</td>
                <td><small>{{ $order->customer_adress }}</small></td>
                <td class="text-center">{{ $order->pizzas()->sum('amount') }}</td>
                <td>{{ delivered($order->delivered) }}</td>
                <td>{{ theDate($order->created_at) }}</td>
                <td class="text-right">
                    <a href="/orders/{{ $order->id }}/edit" class="btn btn-info btn-sm" role="button">
                        Düzenle
                    </a>
                </td>
                <td>
                    <form action="/orders/{{ $order->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        @if ($order->delivered)
                            <button type="submit" class="btn btn-danger btn-sm" role="button">
                                Sil
                            </button>
                        @else
                            <button type="submit" class="btn btn-danger btn-sm" role="button" disabled>
                                Sil
                            </button>
                        @endif
                    </form>
                </td>
            </tr>
        @endforeach

      </tbody>

    </table>

@endsection