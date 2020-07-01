<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' =>'Admin',
            'email' =>'admin123@seu.local',
            'password' => bcrypt('123456'),
            'avatar'=>('default.jpg'),
            'created_at' => '2020-06-06 11:55:00',
            'updated_at' => '2020-06-06 11:55:00'

        ]);
    }
}
