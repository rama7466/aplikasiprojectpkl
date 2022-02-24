<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new User;
        $admin->name = 'Administrator';
        $admin->email = 'admin@app.test';
        $admin->email_verified_at = date('Y-m-d H:i:s');
        $admin->password = bcrypt('password');
        $admin->role = 'admin';
        $admin->save();

        $approve = new User;
        $approve->name = 'Approval';
        $approve->email = 'approval@app.test';
        $approve->email_verified_at = date('Y-m-d H:i:s');
        $approve->password = bcrypt('password');
        $approve->role = 'approval';
        $approve->save();

        $guest = new User;
        $guest->name = 'Guest';
        $guest->email = 'guest@app.test';
        $guest->email_verified_at = date('Y-m-d H:i:s');
        $guest->password = bcrypt('password');
        $guest->role = 'guest';
        $guest->save();
    }
}
