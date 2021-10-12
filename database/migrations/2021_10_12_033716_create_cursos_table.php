<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('presentacion');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->foreignId('instructor_id')->constrained('usuarios');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->string('idioma');
            $table->text('requisitos');
            $table->text('objetivos');
            $table->text('dirigido');
            $table->boolean('estado');
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
        Schema::dropIfExists('cursos');
    }
}
