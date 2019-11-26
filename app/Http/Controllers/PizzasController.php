<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzasController extends Controller
{
    
    public function index()
    {
        $pizzas = Pizza::all();

        return view('pizzas/pizzas', ['pizzas' => $pizzas]);
    }

    public function create()
    {   
        return view('pizzas/create');
    }

    public function store(Request $request)
    {
        Pizza::create($request->all());

        return redirect()->route('pizzas.index');
    }

    public function edit($id)
    {
        $pizza = Pizza::findOrFail($id);

        return view('pizzas/edit', ['pizza' => $pizza]);
    }

    public function update(Request $request, $id)
    {   
        $pizza = Pizza::findOrFail($id);
        $pizza->update($request->all());

        return redirect()->route('pizzas.index');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect()->route('pizzas.index');
    }

}
