<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectos', function (Blueprint $table) {
            //Opciones de la tabla
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            //Columnas
            $table->tinyIncrements('id')->autoIncrement();
            $table->string('titulo', 64)->nullable(false)->default("");
            $table->string('slug', 128)->nullable();
            $table->string('entradilla', 128)->nullable();
            $table->string('logo', 64)->nullable();
            $table->string('imagen1', 64)->nullable();
            $table->string('imagen2', 64)->nullable();
            $table->string('imagen3', 64)->nullable();
            $table->string('imagen4', 64)->nullable();
            $table->string('imagen5', 64)->nullable();
            $table->text('texto1')->nullable();
            $table->text('texto2')->nullable();
            $table->text('texto3')->nullable();
            $table->text('técnicas')->nullable();
            $table->string('enlace1', 128)->nullable();
            $table->string('enlace2', 128)->nullable();
            $table->string('enlace3', 128)->nullable();
            $table->dateTime('fecha')->nullable();
            $table->tinyInteger('activo')->nullable(false)->default(0);
            $table->tinyInteger('home')->nullable(false)->default(0);
            $table->tinyInteger('projects')->nullable(false)->default(0);

            //Columnas created_at y updated_at
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
        Schema::dropIfExists('projectos');
    }
}
