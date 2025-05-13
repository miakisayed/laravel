<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ApiUser extends Model
{
    protected $table = 'api_users';

    protected $fillable = [
        'api_user_name',
        'api_user_password',
        'status',
        'created_by',
    ];



}
