<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Barang::created(['nama_barang' => 'Barang A','stok' => 10,'harga' => 5000,]);
        Barang::created(['nama_barang' => 'Barang B','stok' => 10,'harga' => 5000,]);
        Barang::created(['nama_barang' => 'Barang C','stok' => 30,'harga' => 5000,]);
    }
}
