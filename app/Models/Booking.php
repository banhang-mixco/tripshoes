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
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Get ticket from Ticket.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function tourinformations()
    {
        return $this->hasMany('App\Models\TourInformation');
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
    /**
     * Get ticket from Promo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function promos()
    {
        return $this->belongsTo('App\Models\Promo','ticket_id');
    }
    /* Get all from Traveller.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function travellers()
    {
        return $this->hasMany('App\Models\Traveller');
    }
    /* Get all from TourUser.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function tourusers()
    {
        return $this->hasMany('App\Models\TourUser');
    }
    /* Get all from Invoice.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }
}
