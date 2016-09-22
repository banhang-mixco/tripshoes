<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class User extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_user';
    protected $fillable = [
        'username', 'email', 'q_user_id' , 'password_hash', 'age', 'country', 'avatar', 'lat', 'lng', 'first_name', 'last_name', 'is_available', 'is_deleted', 'modified_date', 'created_date', 'is_guide', 'about_guide', 'api_key', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /* Get all from Booking.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }
    /* Get all from Invoice.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }
    /* Get all from Review.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
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
    /* Get all from CreditCard.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function creditcards()
    {
        return $this->hasMany('App\Models\CreditCard');
    }
    /* Get all from TourInformation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function tourinformations()
    {
        return $this->hasMany('App\Models\TourInformation');
    }
}
