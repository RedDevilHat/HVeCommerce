<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin              = new Role();
        $role_admin->name        = 'admin';
        $role_admin->description = 'A Admin User';
        $role_admin->save();

        $role_manager              = new Role();
        $role_manager->name        = 'manager';
        $role_manager->description = 'A Manager User';
        $role_manager->save();

        $role_bayer              = new Role();
        $role_bayer->name        = 'bayer';
        $role_bayer->description = 'A bayer User';
        $role_bayer->save();
    }
}
