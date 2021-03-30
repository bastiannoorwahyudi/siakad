<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('NamaMahasiswa', 100);
            $table->string('TempatLahir', 50);
            $table->date('TanggalLahir');
            $table->text('Alamat');
            $table->string('JenisKelamin', 50);
            $table->string('email')->unique();
            $table->integer('ProgramStudyID');
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
        Schema::dropIfExists('mahasiswa');
    }
}
