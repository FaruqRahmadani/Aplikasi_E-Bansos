<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('proposals', function (Blueprint $table) {
      $table->increments('id');
      $table->string('nomor');
      $table->date('tanggal_proposal');
      $table->string('perihal');
      $table->string('kelengkapan');
      $table->date('tanggal_masuk');
      $table->string('kategori');
      $table->integer('instansi_id');
      $table->integer('pemohon_id');
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
    Schema::dropIfExists('proposals');
  }
}
