<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
            'name' => 'Pablo Contreras',
            'email' => 'pablo_contreras_1997@outlook.com',
            'password' => bcrypt('Lapatita9'),
        ]);
    }
}
