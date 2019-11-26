<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders\OrdersRepo;
use App\Orders\OrdersRelations;
use App\Order;
use App\Pizza;

class OrdersController extends Controller
{

    public function index(Request $request, OrdersRepo $ordersRepo)
    {   
        $orders = $ordersRepo->getOrders($request);

        return view('orders/orders', ['orders' => $orders]);
    }

    public function create()
    {   
        $pizzas = Pizza::pluck('name', 'id')->toArray();

        return view('orders/create', ['pizzas' => $pizzas]);
    }

    public function store(Request $request, OrdersRelations $ordersRelations)
    {      
        $order = Order::create([
            'customer_name'     => $request->customer_name,
            'customer_adress'   => $request->customer_adress,
        ]);
        
        $ordersRelations->ordersPizzasRelation($request, $order);

        return redirect()->route('orders.index');
    }

    public function edit($id)
    {
        $order = Order::with('pizzas')->findOrFail($id);

        return view('orders/edit', ['order' => $order]);
    }

    public function update(Request $request, $id)
    {   
        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        if ($order->delivered) {
            $order->delete();
        } else {
            abort(403, 'Bu sipariş silinemez!!!');
        }

        return redirect()->route('orders.index');
    }
}
