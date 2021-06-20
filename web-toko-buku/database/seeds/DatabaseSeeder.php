<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            "name" => "kasir",
            "email" => "kasir@gmail.com",
            "password" => Hash::make('kasir123'),
            "address" => "Jl. wangun Bogor Selatan",
            "telphone" => "+62 857 8070 0417",
            "status" => "kasir",
            "akses" => "kasir"
        ]);
    }
}
