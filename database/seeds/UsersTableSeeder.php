<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\user();
        $user->name='admin';
        $user->email='test@test.com';
        $user->password=bcrypt('password');
        $user->save();
    }
}