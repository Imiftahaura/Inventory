<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Penjualan extends Model
{
    use HasFactory;
    protected $guarded = [];

    // menggunakan s karna 1 barang bisa dijual lebih dari 1, dan tidak menggunakan s karna
    public function barang(){
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function user(){
       //withdefault digunakan untuk menampilkan data default jika data tidak ada
        return $this->belongsTo(User::class, 'id_user')->withDefault([
            'name' => 'Tidak diketahui'
        ]);
    }
}


