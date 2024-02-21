<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEyesglowlensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eyesglowlenses', function (Blueprint $table) {
            $table->idphp("id_producto");
            $table->string("nombre");
            $table->string("precio");
            $table->string("cantidad");
            $table->string("url");
            $table->string("id_categoria");
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eyesglowlenses');
    }
}
