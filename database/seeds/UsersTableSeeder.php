<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('users')->delete();
        // cria os registros
        User::create([
            'name'     => 'Marcelo Leopold',
            'email'    => 'marceloleob@gmail.com',
            'password' => bcrypt('marcelo06'),
            'status'   => 1,
        ]);
        User::create([
            'name'     => 'Paulo Feitoza',
            'email'    => 'paulo.wallpaper@gmail.com',
            'password' => bcrypt('123456'),
            'status'   => 1,
        ]);
    }
}
