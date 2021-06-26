<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            /**
             * Criação da base de dados com 7 colunas
             * Id da tarefa, título, contexto, descrição
             * data de criação, atualização e deleção.
             */
            $table->id();
            $table->string('task', 250);
            $table->string('context');
            $table->text('description')->nullable();
            $table->dateTime('done')->nullable();
            $table->dateTime("created_at");
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
