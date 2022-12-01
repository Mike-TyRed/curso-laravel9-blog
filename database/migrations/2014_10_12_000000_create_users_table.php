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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // auto incrementing primary key
            $table->string('name'); // varchar(255)
            $table->string('email')->unique(); // varchar(255) with unique index
            $table->timestamp('email_verified_at')->nullable(); // se registra la fecha en que se hizo el registro
            $table->string('password'); // varchar(255)
            $table->rememberToken(); // almacena token cada vez que se inicia sesión y que mantenga la sesion activa
            $table->timestamps(); // created_at y (almacena la fecha y hora del registro) updated_at (almacena la fecha y hora de la ultima actualización)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
