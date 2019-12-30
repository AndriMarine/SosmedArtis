<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubagendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subagendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('eo_id')->nullable(false); 
            $table->integer('artis_id')->nullable(false); 
            $table->integer('id_posting')->nullable(false); 
            $table->string('rating',10);
            $table->string('status_connect',30);
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
        Schema::dropIfExists('subagendas');
    }
}
