<?php

namespace App\Model;

use App\Model\District;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['first_name','last_name','school_name','district_id','vidhansabha_id','taluka_id','phone_no','email','address','pincode','dob','gender','hall_ticket_number'];

    public function district()
    {
        return $this->belongsTo(District::class,'district_id');
    }

    public function vidhansabha()
    {
        return $this->belongsTo(Vidhansabha::class,'vidhansabha_id');
    }

    public function taluka()
    {
        return $this->belongsTo(Taluka::class,'taluka_id');
    }
}
