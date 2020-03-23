<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ADICIONA OS RELACIONAMENTOS
        Schema::table('pictures', function (Blueprint $table) {
            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('no action')->onUpdate('no action');
        });
    }

    public function down()
    {
        // REMOVE OS RELACIONAMENTOS
        Schema::table('pictures', function (Blueprint $table) {
            $table->dropForeign('pictures_gallery_id_foreign');
            $table->dropColumn('gallery_id');
        });
    }
}
