<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class CreditCard extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_credit_card';
    protected $fillable = [
        'user_id', 'number_card', 'account_name', 'paypal',
    ];
    /* Get all from User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
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
