<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $primaryKey = 'ticket_id';
    protected $fillable = [
        'order_id',
        'wisata_id',
        'visit_date',
        'ticket_code',
        'visitor_name',
        'visitor_id_card',
        'status',
        'scanned_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'wisata_id', 'wisata_id');
    }
}
