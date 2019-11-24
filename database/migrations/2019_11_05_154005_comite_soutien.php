<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComiteSoutien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comite_soutien', function (Blueprint $table) {
            $table->bigIncrements('idComite_soutien');
            $table->string('nom_comite');
            $table->string('categorie');
            $table->string('lieu');
            $table->string('ville');
            $table->time('heure');
            $table->string('rencontre');
            $table->date('date_debut');
            $table->string('code_comité'); 
            $table->string('chef_groupe');   
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
        //
    }
}
