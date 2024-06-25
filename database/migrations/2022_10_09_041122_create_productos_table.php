<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(); // Permitir valores nulos y aumentar el tamaño máximo de caracteres
            $table->text('descripcion', 255)->nullable(); // Permitir valores nulos
            $table->integer('stock', 255)->nullable(); // Permitir valores nulos
            $table->double('precioUnitario', 255)->nullable(); // Permitir valores nulos
            $table->string('imagen', 255)->nullable(); // Permitir valores nulos y aumentar el tamaño máximo de caracteres
            $table->unsignedBigInteger('idcategoria', 255)->nullable(); // Permitir valores nulos
            $table->unsignedBigInteger('idmarca', 255)->nullable(); // Permitir valores nulos
            $table->unsignedBigInteger('idpromocion', 255)->nullable(); // Permitir valores nulos
            $table->timestamps();
            $table->foreign('idcategoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idmarca')->references('id')->on('marcas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idpromocion')->references('id')->on('promocions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
