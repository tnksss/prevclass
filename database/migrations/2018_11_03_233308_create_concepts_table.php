<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                                      ->on('users');
            $table->integer('enrollment_id')->unsigned();
            $table->foreign('enrollment_id')->references('id')
                                        ->on('enrollments');
            $table->boolean('criterion_1')->default(false);
            $table->boolean('criterion_2')->default(false);
            $table->boolean('criterion_3')->default(false);
            $table->boolean('criterion_4')->default(false);
            $table->boolean('criterion_5')->default(false);
            $table->boolean('criterion_6')->default(false);
            $table->boolean('criterion_7')->default(false);
            $table->boolean('criterion_8')->default(false);
            $table->boolean('filled')->default(false);
            $table->string('comment')->default('');
                                      
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
        Schema::dropIfExists('concepts');
    }
}
