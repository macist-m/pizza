@extends('layouts.app')

@section('content')

    {{ Form::open(['route' => ['orders.store']]) }}

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('customer_name', 'Ad Soyad') }}
                    {{ Form::text('customer_name', null, ['class' => 'form-control', 'placeholder' => 'Adınız...']) }}
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('customer_adress', 'Adres') }}
                    {{ Form::textarea('customer_adress', null, ['class' => 'form-control', 'placeholder' => 'Adresiniz...', 'rows' => '3']) }}
                </div>
            </div>

        </div>

        <div class="row mb-2 mt-4">
            <div class="col-2">
                <button class="btn btn-info add-pizza">+ Pizza Ekle</button>
            </div>
        </div>

        <div class="row pizzas mb-4">

            <div class="col-4">
                <div class="form-group">
                    {{ Form::select("pizzas[ids][]", $pizzas, null, ['class' => 'custom-select']) }}
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    {{ Form::select("pizzas[amounts][]", pizzaAmountArray(), null, ['class' => 'custom-select']) }}
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    {{ Form::select("pizzas[sizes][]", pizzaSizeArray(), null, ['class' => 'custom-select']) }}
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Sipariş Ver</button>
            </div>
        </div>

    {{ Form::close() }}

@endsection

