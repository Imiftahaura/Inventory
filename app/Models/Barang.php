<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penjualan;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Penjualans(){
        return $this->hasMany(Penjualan::class);
    }
}


