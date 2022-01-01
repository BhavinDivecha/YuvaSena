<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name','prefix'];

    protected $table = "district";
}
