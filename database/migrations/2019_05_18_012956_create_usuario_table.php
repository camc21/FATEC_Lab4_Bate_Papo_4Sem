<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('usuario');

        $table->increments('usuario_ID');
        $table->string('nome',20);
        $table->timestamps('dataNascimento');
        $table->string('email',20);
        $table->string('rua');
        $table->string('numero');
        $table->increments(usuario_ID);
        $table->string(usuario_ID);
        $table->increments(usuario_ID);
    }
}
