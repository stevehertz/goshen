<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $time = Carbon::now();
        DB::table('users')->delete();
        DB::statement("ALTER TABLE `users` AUTO_INCREMENT = 1");

        DB::table('users')->insert(
            [
                [
                    'first_name' => 'Stephen',
                    'last_name' => 'Kamau',
                    'profile' => 'noimage.png',
                    'phone' => '0715356718',
                    'email' => 'stevekamahertz@gmail.com',
                    'password' => bcrypt('stevekama'),
                    'remember_token' => Str::random(10),
                    'created_at' => $time,
                    'updated_at' => $time
                ],
            ]
        );
    }
}
