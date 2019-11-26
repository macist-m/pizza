<?php

namespace App\Orders;

use App\Order;

class OrdersRepo
{
    public function getOrders($request)
    {   
        if ($request->has('delivered')) return Order::orderBy('created_at', 'desc')->whereDelivered($request->delivered)->get();
        
        if ($request->has('search')) return $this->search($request);

        return Order::orderBy('created_at', 'desc')->get();
    }

    public function search($request)
    {   
        $word = $request->search;

        return Order::orderBy('created_at', 'desc')
              ->where('customer_name', 'like', "%{$word}%")
              ->orWhere('customer_adress', 'like', "%{$word}%")
              ->get();
    }
}
