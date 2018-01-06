<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("place_id");
            $table->integer("user_id");
            $table->boolean("internet_has");
            $table->boolean("internet_open");
            $table->string("internet_speed");
            $table->string("internet_pass");
            $table->string("food_description");
            $table->string("drink_description");
            $table->integer("service_rate");// (1 - 5) star
            $table->integer("price_rate");// (1 - 5)$
            $table->integer("comfort_rate");// (1 - 5)star
            $table->string("accommodations_description");
            $table->integer("noise_rate");// ( 1 - 5)star
            $table->integer("general_rate"); //(1 - 5)star
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
        Schema::dropIfExists('reviews');
    }
}
