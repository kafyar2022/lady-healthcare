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
      $table->string('slug');
      $table->string('category');
      $table->string('prescription');
      $table->string('direction_id')->nullable();
      $table->string('release_form_id');
      $table->string('url')->nullable();
      $table->string('img')->default('muffin-grey.svg');
      $table->string('img_thumb')->default('muffin-grey.svg');
      $table->string('instruction')->nullable();
      $table->text('description')->nullable();
      $table->text('compound')->nullable();
      $table->text('indications')->nullable();
      $table->text('mode')->nullable();
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
