<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'MD.Admin',
            
            'email' => 'author@blog.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'MD.Author',
            
            'email' => 'author@blog.com',
            'password' => bcrypt('rootauthor'),
        ]);
    }
}
