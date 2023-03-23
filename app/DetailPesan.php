<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_Pesan extends Model
{
    protected $primaryKey = 'no_pesan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "detail_pesan";
    protected $fillable = ['no_pesan', 'kd_brg', 'qty_pesan', 'subtotal'];
}
