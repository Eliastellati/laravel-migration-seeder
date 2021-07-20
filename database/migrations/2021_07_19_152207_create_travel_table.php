<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->string('travel_agency',40);
            $table->string('country',50);
            $table->string('city',60);
            $table->string('hotel',100);
            $table->text('description');
            $table->date('departure');
            $table->date('return');
            $table->boolean('all_inclusive')->default(1);
            $table->float('price',6,2);
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
        Schema::dropIfExists('travel');
    }
}
