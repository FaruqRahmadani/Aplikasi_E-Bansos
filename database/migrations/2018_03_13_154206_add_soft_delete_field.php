<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeleteField extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('pemohons', function ($table) {
      $table->softDeletes();
    });
    Schema::table('instansis', function ($table) {
      $table->softDeletes();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('pemohons', function (Blueprint $table) {
      $table->dropSoftDeletes();
    });
    Schema::table('instansis', function (Blueprint $table) {
      $table->dropSoftDeletes();
    });
  }
}
