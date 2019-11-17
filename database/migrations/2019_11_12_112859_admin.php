<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('idAdmin');
            $table->string('Nom');
            $table->string('Prenoms');
            $table->string('E-mail');
            $table->string('Password');
            $table->time('Niveau_securite');
            $table->timestamps('created_at'); 
            $table->timestamps('updated_at');   
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
