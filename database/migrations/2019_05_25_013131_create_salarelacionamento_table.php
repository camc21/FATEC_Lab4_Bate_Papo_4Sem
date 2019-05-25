<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalarelacionamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarelacionamento', function (Blueprint $table) {
            $table->primary('sala_id');
            $table->foreign('sala_id')->reference('id')->on('salas');
            $table->string('tipo_relacionamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salarelacionamento');
    }
}
