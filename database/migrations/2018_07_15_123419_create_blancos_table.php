<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blancos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('valueVan')->nullable();
            $table->float('valueAlbireo')->nullable();
            $table->float('valueQuantec')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blancos');
    }
}
