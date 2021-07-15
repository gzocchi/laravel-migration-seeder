<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('area', 25);
            $table->string('country', 25);
            $table->string('name', 100);
            $table->unsignedTinyInteger('duration_day');
            $table->float('price_eur', 7, 2);
            $table->string('type', 100);
            $table->string('period', 15)->default('Tutto l\'anno');
            $table->text('info');
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
        Schema::dropIfExists('travels');
    }
}
