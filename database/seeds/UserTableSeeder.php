<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

        $employee           = new User();
        $employee->name     = 'admin';
        $employee->email    = 'admin@hookha.vape';
        $employee->password = Hash::make('secret');
        $employee->save();
        $employee->roles()->attach($role_admin);
    }
}
