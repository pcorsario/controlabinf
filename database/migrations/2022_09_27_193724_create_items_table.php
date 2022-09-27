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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('n_item', 50);
            $table->string('marca', 50);
            $table->string('monitor_serie', 50); 
            $table->string('procesador', 50); 
            $table->string('memoria', 50); 
            $table->string('disco_duro', 50); 
            $table->string('memoria_serie', 50); 
            $table->string('regulador_serie', 50);
            $table->string('ups_serie', 50);
            $table->string('teclado_serie', 50);
            $table->string('mouse_serie', 50);
            $table->boolean('dualboot', );
            $table->string('estado', 50);
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
        Schema::dropIfExists('items');
    }
};
