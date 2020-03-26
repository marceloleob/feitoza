<?php

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('galleries')->delete();
        // cria os registros
        Gallery::create(['name' => 'Bathroom', 'friendly' => 'bathroom', 'status' => 1]);
        Gallery::create(['name' => 'Kitchen', 'friendly' => 'kitchen', 'status' => 1]);
        Gallery::create(['name' => 'Lobby', 'friendly' => 'lobby', 'status' => 1]);
        Gallery::create(['name' => 'Stairway', 'friendly' => 'stairway', 'status' => 1]);
        Gallery::create(['name' => 'Bedroom', 'friendly' => 'Bedroom', 'status' => 1]);
        Gallery::create(['name' => 'Living Room', 'friendly' => 'living-room', 'status' => 1]);
        Gallery::create(['name' => 'Dining Room', 'friendly' => 'dining-room', 'status' => 1]);
    }
}
