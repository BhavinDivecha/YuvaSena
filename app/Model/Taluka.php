<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Taluka extends Model
{
    protected $fillable = ['name','center_name','center_code'];

    protected $table = "taluka";
}
