@extends('layouts.app')

@section('content')

    {{ Form::open(['route' => ['orders.update', $order->id]]) }}
    @method('PUT')
    
        <div class="row mb-4">
            <div class="col-4">
                {{ Form::select('delivered', [0 => 'Teslim Olmadı!!!', 1 => 'Teslim Edildi'], $order->delivered, ['class' => 'form-control']) }}
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Sipariş Düzenle</button>
            </div>
        </div>

    {{ Form::close() }}

@endsection