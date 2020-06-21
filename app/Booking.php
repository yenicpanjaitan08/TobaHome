<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = ['email','notel','name','check_in','check_out','payment','id_visitor','id_homestay','total'];

    public function profil(){
        return $this->belongsTo(Profil::class);
    }

    public function homestay(){
        return $this->belongsToMany(Homestay::class);
    }

    
}
