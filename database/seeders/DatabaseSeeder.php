<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public static function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::insert([
        //     ['nrp' => '0', 'nama' => 'Admin', 'email' => 'admin@sks-pens.site', 'role' => '1', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
        //     ['nrp' => '1', 'nama' => 'Frans', 'email' => 'frans@sks-pens.site', 'role' => '0', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
        // ]);
        UserSeeder::run();
        RuanganSeeder::run();
    }
}
