<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            ['name'=>'Dinh Linh', 'email'=>'dinhvanlinh06102002@gmail.com', 'email_verified_at'=> '2023-04-01','password'=>'123456','remember_token'=>'100','created_at'=>'2023-04-01','updated_at'=>'2023-04-01'],
            ['name'=>'Dinh Thai', 'email'=>'dinhvanthai06102002@gmail.com', 'email_verified_at'=> '2023-04-01','password'=>'123456','remember_token'=>'100','created_at'=>'2023-04-01','updated_at'=>'2023-04-01'],
            ['name'=>'Dinh Nhat', 'email'=>'dinhvannhat06102002@gmail.com', 'email_verified_at'=> '2023-04-01','password'=>'123456','remember_token'=>'100','created_at'=>'2023-04-01','updated_at'=>'2023-04-01']
        ];
        DB::table('users')->insert($users);
    }
}
