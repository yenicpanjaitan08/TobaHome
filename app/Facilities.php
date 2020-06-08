<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    protected $table = 'facilities';
    protected $fillable = ['id','facility_name','img'];

    public function homestay(){
        return $this->belongsTo(Homestay::class);
    }
}
