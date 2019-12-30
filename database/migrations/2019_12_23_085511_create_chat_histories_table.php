<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('chat_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('receiver_id')->nullable(false); 
            $table->integer('sender_id')->nullable(false); 
            $table->datetime('reveice_time');
            $table->datetime('send_time');
            $table->longText('description');
            $table->string('status_message',30);
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
        Schema::dropIfExists('chat_histories');
    }
}
