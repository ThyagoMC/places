<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('type_id');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('places')->insert(
            array(
                'name' => 'Café Stop',
                'address' => 'Avenida',
                'city' => 'Recife',
                'state' => 'PE',
                'country' => 'Brasil',
                'type_id' => '1'
            )
        );
        DB::table('places')->insert(
            array(
                'name' => 'Barzin',
                'address' => 'Rua',
                'city' => 'Recife',
                'state' => 'PE',
                'country' => 'Brasil',
                'type_id' => '5'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}

