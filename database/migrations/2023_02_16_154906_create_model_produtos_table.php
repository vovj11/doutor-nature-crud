<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) { //(nome da tabela, função())
            $table->id();
            $table->string('codigo');
            /*$table->integer('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');*/
            $table->string('nome');
            $table->longText('descricao');
            $table->double('preco',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
};
