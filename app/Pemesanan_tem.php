<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan_tem extends Model
{
    protected $primaryKey = 'kd_brg';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = "tmp_pemesanan";
    protected $fillable = ['kd_brg', 'qty_pesan'];
}
