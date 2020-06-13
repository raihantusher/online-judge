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
        // $this->call(UserSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            RolesUsersTableSeeder::class,
            CategorySeeder::class,
          ]);
    }
}
