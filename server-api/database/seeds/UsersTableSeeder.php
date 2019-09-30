<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Rodrigo Pellegrini',
        'email' => 'admin@admin.com.br',
        'password' => bcrypt('admin123'),
    ]);
    }
}
