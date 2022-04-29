<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('applications', function (Blueprint $table) {
      $table->id();
      $table->string('vacancy_id');
      $table->string('name');
      $table->string('slug')->unique();
      $table->string('phone');
      $table->string('email');
      $table->string('cv');
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
    Schema::dropIfExists('applications');
  }
}
