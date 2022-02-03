<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('p_room');
            $table->string('dist_tier');
            $table->string('headline');
            $table->string('subhead');
            $table->string('r_dates');
            $table->text('press_body');
            $table->string('sourceCompany');
            $table->string('c_name');
            $table->string('c_email');
            $table->string('c_phone');
            $table->string('c_mobile');
            $table->string('c_address');
            $table->string('c_website');
            $table->string('mapAddress');
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
        Schema::dropIfExists('presses');
    }
}
