<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstansisTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('instansis', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nama');
      $table->string('alamat');
      $table->string('rt');
      $table->string('rw');
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
    Schema::dropIfExists('instansis');
  }
}
