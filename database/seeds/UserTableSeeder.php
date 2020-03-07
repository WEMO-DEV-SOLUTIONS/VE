<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exist_user = DB::table('users')->where([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
        ])->count();
        if ( empty($exist_user) ){
            DB::table('users')->insert([
                'name'=> 'admin',
                'email'=> 'admin@gmail.com',
                'password'=> Hash::make('admin'),
                'created_at'=> now()
            ]);
        }
    }
}
