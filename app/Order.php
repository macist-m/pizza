<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'customer_name',
        'customer_adress',
        'pizza_id',
        'amount',
        'size',
        'delivered'
    ];

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza')->withPivot('amount', 'size');
    }

}
