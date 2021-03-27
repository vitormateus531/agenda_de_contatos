<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->text('nome', 150);
            $table->text('email', 100);
            $table->text('telefone_fixo', 25)->nullable();
            $table->text('celular', 25);
            $table->text('rede_social', 150)->nullable();
            $table->timestamps();
        });
    
        Schema::table('contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
        
            $table->foreign('id_user')->references('id')->on('users');
        });
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
