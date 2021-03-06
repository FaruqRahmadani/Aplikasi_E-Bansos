<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusProposalsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('status_proposals', function (Blueprint $table) {
      $table->increments('id');
      $table->string('tujuan')->default('-');
      $table->string('nomor_surat')->default('-');
      $table->string('perihal')->default('-');
      $table->integer('status')->default(0);
      $table->string('keterangan')->default('-');
      $table->integer('proposal_id');
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
    Schema::dropIfExists('status_proposals');
  }
}
