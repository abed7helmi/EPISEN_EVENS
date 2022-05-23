<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->integer('Organisateur');
            $table->string('Nom_evenement')->nullable();
            $table->string('Emplacement')->nullable();
            $table->string('Salle')->nullable();
            $table->string('Type')->nullable();
            $table->integer('Nb_participants')->nullable();
            $table->integer('Nb_participants_R')->nullable();
            $table->datetime('date_evenement')->nullable();
            $table->string('Commentaire')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('Ville')->nullable();
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
        Schema::dropIfExists('evenements');
    }
}
