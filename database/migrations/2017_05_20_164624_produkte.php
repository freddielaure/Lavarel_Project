<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produkte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     /* Mit der Function "Up" Spalte in der Datenbank hinzufügen*/
    public function up()
    {
      Schema::create('Products', function (Blueprint $table) {
      $table->increments('id');
      $table->string('Produktname');
      $table->string('Kategorie');
      $table->string('Typ');
      $table->double('Preis');
      $table->string('Beschreibung');
      $table->string('Lieferant');
      $table->integer('RegalNr');
      $table->integer('Bestandswert');
      $table->integer('Bestelltswert');
      $table->string('LieferantAdresse');
      $table->timestamps();
  });

  public function down()
      {
        Schema::table('users', function (Blueprint $table) {
          $table->string('Produktname');
          $table->string('Kategorie');
          $table->string('Typ');
          $table->double('Preis');
          $table->string('Beschreibung');
          $table->string('Lieferant');
          $table->integer('RegalNr');
          $table->integer('Bestandswert');
          $table->integer('Bestelltswert');
          $table->string('LieferantAdresse');
      });
      }



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     /* Mit der Function "down" Löscht man die Tabelle*/
    public function down()
    {
        //
    }
}
