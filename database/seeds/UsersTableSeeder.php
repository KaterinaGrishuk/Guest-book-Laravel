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
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'name'=>'Александр',
                'email'=>'alex@mail.ru',
                'password'=>'123456'
            ],
            [
                'name'=>'Ольга',
                'email'=>'olga@mail.ru',
                'password'=>'123456'
            ],
            [
                'name'=>'Сергей',
                'email'=>'serg@mail.ru',
                'password'=>'123456'
            ]
        ]);
    }
}
