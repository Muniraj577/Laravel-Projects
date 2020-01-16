<?php

use App\Admin;
use App\Role;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $admin = new Admin();
        $admin->name = 'Anshu Mallik';
        $admin->email = 'anshumallik@gmail.com';
        $admin->password = bcrypt('anshu12345');
        $admin->role = 'Admin';
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
