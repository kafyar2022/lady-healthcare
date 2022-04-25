<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('drugs', function (Blueprint $table) {
      $table->id();
      $table->string('direction_id');
      $table->string('category');
      $table->string('title');
      $table->string('slug');
      $table->string('min_composition')->nullable();
      $table->string('max_composition')->nullable();
      $table->string('icon')->nullable();
      $table->string('prescription');
      $table->text('description')->nullable();
      $table->string('img')->default('muffin-grey.svg');
      $table->string('instruction')->nullable();
      $table->text('compound')->nullable();
      $table->text('indications')->nullable();
      $table->text('mode')->nullable();
      $table->string('url');
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
    Schema::dropIfExists('drugs');
  }
}
