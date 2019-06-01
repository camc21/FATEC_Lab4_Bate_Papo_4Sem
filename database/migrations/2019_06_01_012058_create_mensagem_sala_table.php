<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagemSalaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagem_sala', function (Blueprint $table) {
            $table->primary('mensagem_id')->unsigned();
            $table->primary('sala_id')->unsigned();
            $table->foreign('mensagem_id')->references('id')->on('mensagens');
            $table->foreign('sala_id')->references('id')->on('salas');
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
        Schema::dropIfExists('mensagem_sala');
    }
}
