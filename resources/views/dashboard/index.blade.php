@extends('layouts.app')

@section('content')

    <div class="row text-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <a href="/pizzas" class="btn btn-primary stretched-link">Pizzalar</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                   <a href="/orders" class="btn btn-primary stretched-link">Siparişler</a>
                </div>
            </div>
        </div>
    </div>

@endsection