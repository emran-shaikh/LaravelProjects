<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role;
        $role->name= 'Super Admin';
        $role->is_active= 1;
        $role->save();

        $role = new Role;
        $role->name= 'Admin';
        $role->is_active= 1;
        $role->save();

        $role = new Role;
        $role->name= 'User';
        $role->is_active= 1;
        $role->save();

        $user = User::find(1);
        $user->role_id = 1;
        $user->is_active = 1;

        $user->save();
    }
}
