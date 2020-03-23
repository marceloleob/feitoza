<?php

use App\Models\Picture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('pictures')->delete();
    }
}
