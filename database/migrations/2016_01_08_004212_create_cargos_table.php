<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name_cargo');
            $table->unsignedInteger('unity_id');
            $table->enum('cargo', ['director', 'estudios', 'disciplina']);
            $table->unsignedInteger('year');
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('unity_id')
                ->references('id')->on('unities')
                ->onDelete('restrict')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cargos');
    }
}
