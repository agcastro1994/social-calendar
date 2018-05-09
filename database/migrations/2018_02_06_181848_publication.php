<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('social_n_id'); // foreign key to connect the post with an social network
            $table->string('title');
            $table->text('body');
            $table->time('time');
            $table->integer('month');
            $table->string('year');
            $table->integer('day');

            //$table->string('image_addr');
            $table->timestamps();
        });

        //
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
}
