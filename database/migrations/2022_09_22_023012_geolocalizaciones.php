<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geolocalizaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('telefono');
            $table->string('path')->nullable();
            $table->decimal('latitud',$precision = 10,$scale = 8);
            $table->decimal('longitud',$precision = 10,$scale = 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
