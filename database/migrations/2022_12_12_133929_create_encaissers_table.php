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
        Schema::create('encaissers', function (Blueprint $table) {
            $table->foreignId('idcaisse')->constrained('caissiers');
            $table->foreignId('id')->constrained('etudiants');
            $table->date('datedebut');
            $table->date('datefin');
            $table->time('heureEncaisse');
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
        Schema::dropIfExists('encaissers');
    }
};
