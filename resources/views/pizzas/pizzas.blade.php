@extends('layouts.app')

@section('content')

    <div class="row mb-2">
        <div class="col">
            <h4>Pizzalar</h4>
        </div>
        <div class="col text-right">
            <a href="/pizzas/create" class="btn btn-secondary" role="button">
                Yeni Ekle
            </a>
        </div>
    </div>

    <table class="table table-striped">

        <thead>
            <tr>
                <th>Adı</th>
                <th>Tarih</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pizzas as $pizza)
                <tr>
                    <td>{{ $pizza->name }}</td>
                    <td>{{ theDate($pizza->created_at) }}</td>
                    <td class="text-right">
                        <a href="/pizzas/{{ $pizza->id }}/edit" class="btn btn-info btn-sm" role="button">
                            Düzenle
                        </a>
                    </td>
                    <td>
                        <form action="/pizzas/{{ $pizza->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" role="button">
                                Sil
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection