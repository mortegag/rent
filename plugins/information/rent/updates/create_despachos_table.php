<?php namespace Information\Rent\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDespachosTable extends Migration
{
    public function up()
    {
        Schema::create('information_rent_despachos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('information_rent_despachos');
    }
}
