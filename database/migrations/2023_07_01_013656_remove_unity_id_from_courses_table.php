<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUnityIdFromCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Verifica se a coluna unity_id existe antes de removê-la
            if (Schema::hasColumn('courses', 'unity_id')) {
                // Remove a chave estrangeira unity_id
                $table->dropForeign(['unity_id']);
                // Remove a coluna unity_id
                $table->dropColumn('unity_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            // Adiciona novamente a coluna unity_id
            $table->unsignedBigInteger('unity_id')->nullable();
            // Adiciona novamente a chave estrangeira unity_id
            $table->foreign('unity_id')->references('id')->on('unities');
        });
    }
}
