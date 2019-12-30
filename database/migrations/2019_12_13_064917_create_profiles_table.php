<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 150)->nullable(false); 
            $table->string('address', 255);
            $table->string('city', 100);
            $table->string('email', 50)->unique();
            $table->dateTime('date_of_birtdh');
            $table->enum('gender', ['male', 'female']);
            $table->text('speciality')->nullable(true);
            $table->string('role',30);
            $table->string('phone_number', 50)->nullable(false);
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
        Schema::dropIfExists('profiles');
    }
}
