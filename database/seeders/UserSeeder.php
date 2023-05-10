<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {

        User::insert([
            ['nrp' => '0', 'nama' => 'Admin', 'email' => 'admin@sks-pens.site', 'role' => '1', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
            ['nrp' => '3120500027', 'nama' => 'Frans', 'email' => 'frans@sks-pens.site', 'role' => '0', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
            ['nrp' => '3120500004', 'nama' => 'Arvian', 'email' => 'arvian@sks-pens.site', 'role' => '0', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
            ['nrp' => '3120500008', 'nama' => 'Navis', 'email' => 'navis@sks-pens.site', 'role' => '0', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
            ['nrp' => '3120500028', 'nama' => 'Ifku', 'email' => 'ifku@sks-pens.site', 'role' => '0', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
            ['nrp' => '3120500022', 'nama' => 'Salwa', 'email' => 'salwa@sks-pens.site', 'role' => '0', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
            ['nrp' => '3120500006', 'nama' => 'Faiq', 'email' => 'faiq@sks-pens.site', 'role' => '0', 'password' => '$2y$10$Yff8w5qwNyfltXkHjB6cmeT/UEKQKkIhmN5dzsI77WUZUvUWKQPM2'],
        ]);
    }
}