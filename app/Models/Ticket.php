<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ticket extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_ticket';
    protected $fillable = [
        'name', 'price', 'surcharge', 
    ];
    /**
     * Get ticket from Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function booking()
    {
        return $this->belongsTo('App\Models\Booking');
    }
}
