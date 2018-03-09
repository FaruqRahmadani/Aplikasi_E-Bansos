<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemohonsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('pemohons', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nik');
      $table->string('nama');
      $table->string('tempat_lahir');
      $table->date('tanggal_lahir');
      $table->string('pekerjaan');
      $table->string('alamat');
      $table->string('rt');
      $table->string('rw');
      $table->integer('provinsi_id');
      $table->integer('kota_id');
      $table->integer('kecamatan_id');
      $table->integer('kelurahan_id');
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
    Schema::dropIfExists('pemohons');
  }
}
