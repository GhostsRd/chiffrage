<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnalyseCadrages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysecadrages', function (Blueprint $table) {
            $table->id("id")->autoIncrement();
            $table->integer('id_projet');
            $table->string('commentaire');
            $table->date("date_debut");
            $table->date("date_defin");
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
