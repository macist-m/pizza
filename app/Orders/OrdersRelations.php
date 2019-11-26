<?php

namespace App\Orders;

use App\Order;

class OrdersRelations
{   
    private $order;

    public function __construct(Order $order){
      $this->order = $order;
    }

    public function ordersPizzasRelation($request, $order)
    {
        $pizzaIds = $request->pizzas['ids'];
        $amounts = $request->pizzas['amounts'];
        $sizes = $request->pizzas['sizes'];

        for ($i=0; $i < count($pizzaIds); $i++) { 
            $relationArr[$i] = [ $pizzaIds[$i] => ['amount' => $amounts[$i], 'size' => $sizes[$i]] ];
            $order->pizzas()->attach($relationArr[$i]);
        }
    }
    
}
