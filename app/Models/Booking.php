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

     /**
     * Get id from user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function users()
    {
        return $this->hasOne('App\Models\User', 'user_id');
    }

    /**
     * Get ticket from Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function tours()
    {
        return $this->hasMany('App\Models\Tour','tour_id');
    }

    /**
     * Get ticket from Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket','ticket_id');
    }
}
