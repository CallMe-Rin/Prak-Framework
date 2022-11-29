<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_posts', function (Blueprint $table) {
            $table->id();
            $table->char('nim');
            $table->char('nama');
            $table->integer('umur');
            $table->char('alamat');
            $table->char('kota');
            $table->char('kelas');
            $table->char('jurusan');
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
        Schema::dropIfExists('mahasiswa_posts');
    }
}
