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
      $table->string('title');
      $table->string('category');
      $table->string('prescription');
      $table->string('direction_id');
      $table->string('min_composition')->nullable();
      $table->string('max_composition')->nullable();
      $table->string('img')->default('muffin-grey.svg');
      $table->string('icon')->nullable();
      $table->string('slug');
      $table->text('description')->nullable();
      $table->text('compound')->nullable();
      $table->text('indications')->nullable();
      $table->text('mode')->nullable();
      $table->string('instruction')->nullable();
      $table->string('url')->default('#');
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
