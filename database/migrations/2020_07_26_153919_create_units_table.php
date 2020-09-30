<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('units', function (Blueprint $table) {
          $table->id();
          $table->foreignId('product_id')->constrained();
          $table->string('volumen');
          $table->float('price');
          $table->integer('quantity');
          $table->float('sponsor');
          $table->float('supsponsor');
          $table->timestamps();
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
        Schema::dropIfExists('units');
    }
}
