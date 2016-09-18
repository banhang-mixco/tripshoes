<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Booking extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_booking';
    protected $fillable = [
        'user_id', 'tour_id', 'ticket_id', 'number_ticket', 'cost', 'promo_id', 'date_created', 'date_modiffied',
    ];

}
