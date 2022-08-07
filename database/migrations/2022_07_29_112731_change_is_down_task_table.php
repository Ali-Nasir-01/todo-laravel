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
        schema::table('tasks', function (Blueprint $table){
            $table->boolean('isDown')->default(false)->change();
            $table->renameColumn('isDown', 'isDone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('tasks', function (Blueprint $table){
            $table->boolean('isDone')->change();
            $table->renameColumn('isDone', 'isDown');
        });
    }
};
