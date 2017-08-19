<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Role::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1');

        foreach (['admin', 'guest'] as $role){
            Role::create(
                ['name' => $role]
            );
        }
    }
}
