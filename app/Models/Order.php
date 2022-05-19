<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes, HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
    ];


    public function user()
    {
        return $this->belongsTo(Post::class, 'product_id');
    }
    public function orderproduct()
    {
        return $this->belongsTo(OrderProduct::class, 'order_product_id');
    }
    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id');
    }
}
