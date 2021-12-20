<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det_facturas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('precio');
            $table->bigInteger('total');
            $table->dateTime('fecha_registro');
            $table->string('descripcion', 255);
            $table->bigInteger('cantidad');
            
            $table->foreignId('id_factura')->constrained('facturas');
            $table->foreignId('id_consumible')->constrained('consumibles');
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
        Schema::dropIfExists('det_facturas');
    }
}
