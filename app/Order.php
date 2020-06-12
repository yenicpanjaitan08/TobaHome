<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'nama', 'email', 'notel', 'arrive', 'jumlah', 'alamat', 'jeniskelamin', 'depart', 'tipe_room', 'nama_homestay'];
}
