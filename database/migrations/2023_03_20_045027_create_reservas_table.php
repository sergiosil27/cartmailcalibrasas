<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('email');
            $table->dateTime('fecha');
            $table->integer('cantidad_personas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *  protected $fillable = ['nombre', 'email', 'fecha', 'cantidad_personas'];
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
