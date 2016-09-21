<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Place extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_place';
    protected $fillable = [
        'name', 'url', 
    ];

    /**
     * Get ticket from Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function tourinfomations()
    {
        return $this->belongsTo('App\Models\TourInformation');
    }
}
