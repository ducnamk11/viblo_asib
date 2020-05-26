<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
    }
}


        // DB::table('users')->insert([
        //     'usernam' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'email' => 'admin@gmail.com',
        //     'avatar' => '1.jpg',
        //     'password' => Hash::make('123456'),
        //     'level' => 1,
        // ]);
