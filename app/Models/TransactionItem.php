<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'product_id',
        'transaction_id',
        'quantity',
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
