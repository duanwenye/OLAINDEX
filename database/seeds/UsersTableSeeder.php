<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert([
            'name' => 'admin',
            'email' => 'iytolqjmv@t.odmail.cn',
            'password' => bcrypt('Dwy061588'),
        ]);
    }
}
