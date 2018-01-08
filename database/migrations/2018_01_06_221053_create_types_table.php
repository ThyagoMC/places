<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string("description");
            $table->timestamps();
            $table->softDeletes();
        });

        // Insert some stuff
        DB::table('types')->insert(array('description' => 'Café'));
        DB::table('types')->insert(array('description' => 'Restaurante'));
        DB::table('types')->insert(array('description' => 'Coworking'));
        DB::table('types')->insert(array('description' => 'Livraria'));
        DB::table('types')->insert(array('description' => 'Outros'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
