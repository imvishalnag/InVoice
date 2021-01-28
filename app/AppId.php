<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppId extends Model
{
    protected $table='app_ids';
    protected $fillable = ['app_id'];
}
