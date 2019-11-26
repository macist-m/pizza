@extends('layouts.app')

@section('content')

    {{ Form::open(['route' => ['pizzas.store']]) }}

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('name', 'Pizza Adı') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Pizza adı...']) }}
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>

    {{ Form::close() }}

@endsection