<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'wisata_id';
    protected $fillable = [
        'name',
        'slug',
        'image_url',
        'location',
        'base_price_weekday',
        'base_price_weekend',
        'capacity_per_day',
        'description',
        'is_active',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'wisata_id', 'wisata_id');
    }

    public function getRemainingQuota($date)
    {
        $ticketsSold = $this->tickets()
            ->where('visit_date', $date)
            ->whereIn('status', ['active', 'used'])
            ->count();

        return max(0, $this->capacity_per_day - $ticketsSold);
    }
}
