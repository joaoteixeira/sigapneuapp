<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePneusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pneus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->string('numero_serie');
            $table->date('data_fabricacao')->nullable();
            $table->date('data_validade')->nullable();
            $table->string('medida');
            $table->enum('pneu_novo', ['sim', 'nao']);
            $table->enum('antifurto', ['sim', 'nao']);
            $table->bigInteger('km_inicial');
            
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
        Schema::dropIfExists('pneus');
    }
}
