<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'user_id',
        'promo_id',
        'invoice_number',
        'total_amount',
        'tax_amount',
        'payment_status',
        'payment_method',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'promo_id', 'promo_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'order_id', 'order_id');
    }
}
