<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class TourInformation extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'tbl_tour_information';
    protected $fillable = [
        'guide_id', 'place_id', 'price', 'time', 'transport', 'name', 'about', 'highlights', 'about_tour', 'reviews', 'about_guide', 'is_available', 'lat', 'lng'
    ];

}