<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Invoice extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_invoice';
    protected $fillable = [
        'number_invoice', 'user_id', 'ticket_id', 'number_tickets', 'ticker_price', 'promo', 'total_cost', 'date_created', 'date_modified', 'status', 'credit_card_id',
    ];

}
