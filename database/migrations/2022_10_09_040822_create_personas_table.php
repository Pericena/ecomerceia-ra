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
    Schema::create('personas', function (Blueprint $table) {
      $table->id();

      // Personal information
      $table->string('name');
      $table->integer('ci')->unique();
      $table->string('email')->unique();
      $table->char('sexo', 1);
      $table->bigInteger('celular')->nullable(); // Changed to bigInteger
      $table->string('domicilio');

      // Employment details
      $table->double('salario')->nullable();
      $table->string('estadoemp')->nullable(); // Employment status
      $table->string('estadocli')->nullable(); // Client status

      // Types and references
      $table->smallInteger('tipoc'); // Client type
      $table->smallInteger('tipoe'); // Employment type
      $table->foreignId('iduser')->nullable()->constrained('users')->onDelete('set null');

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
        Schema::dropIfExists('personas');
    }
};