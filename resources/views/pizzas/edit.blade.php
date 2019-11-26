@extends('layouts.app')

@section('content')

    {{ Form::open(['route' => ['pizzas.update', $pizza->id]]) }}
    @method('PUT')

        <div class="row">

            <div class="col-6">
                <div class="form-group">
                    {{ Form::label('name', 'Pizza Adı') }}
                    {{ Form::text('name', $pizza->name, ['class' => 'form-control', 'placeholder' => 'Pizza adı...']) }}
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>

    {{ Form::close() }}

@endsection