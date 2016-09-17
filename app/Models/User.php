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
        'username', 'email', 'q_user_id' , 'password_hash', 'age', 'country', 'avatar', 'lat', 'lng', 'first_name', 'last_name', 'is_available', 'is_deleted', 'modified_date', 'created_date', 'is_guide', 'api_key', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
