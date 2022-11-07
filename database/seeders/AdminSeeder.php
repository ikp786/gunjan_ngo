<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $data = array(
          'name' =>  'admin' ,
          'email' =>  'admin@gmail.com' ,
          'password' =>  Hash::make('123') ,
          'type' =>  'Admin' ,
      );
       DB::table('users')->insert($data);
    }
}
