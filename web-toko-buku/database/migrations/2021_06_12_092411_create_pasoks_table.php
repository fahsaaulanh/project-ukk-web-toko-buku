<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasoks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_distributor')->unsigned();
            $table->string('id_buku');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->timestamps();
            $table->foreign('id_distributor')->references('id')->on('distributors');
            $table->foreign('id_buku')->references('id')->on('bukus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasoks');
    }
}
