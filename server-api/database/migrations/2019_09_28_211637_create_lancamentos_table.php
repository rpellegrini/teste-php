<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLancamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lancamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tipo')->comment('1 => Despesa, 2 => Receita');
            $table->date('data');
            $table->string('descricao');
            $table->decimal('valor', 8, 2);
            $table->boolean('status_pagamento')->default(0)
                  ->comment('0 => Em aberto, 1 => Realizado');
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
        Schema::dropIfExists('lancamentos');
    }
}
