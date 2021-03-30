<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputnilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputnilai', function (Blueprint $table) {
            $table->id();
            $table->integer('MataKuliahID');
            $table->integer('MahasiswaID');
            $table->integer('Nilai');
            $table->string('Bobot', 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputnilai');
    }
}
