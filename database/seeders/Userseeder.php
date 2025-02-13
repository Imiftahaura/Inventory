<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => 'User A',
            'email' => 'mif@gmail.com',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. Angsa',
            'telp' => '1234324234',

        ]);
    }
}
