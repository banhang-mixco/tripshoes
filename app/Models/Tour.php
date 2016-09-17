<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Tour extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_tour';
    protected $fillable = [
        'tour_infomation_id', 'start_time', 'finish_time', 'travellers', 'tickers', 
    ];

}
