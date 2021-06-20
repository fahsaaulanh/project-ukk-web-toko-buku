<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmppenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmppenjualans', function (Blueprint $table) {
            $table->string('id_buku');
            $table->integer('jumlah_beli');
            $table->integer('total_harga');
            $table->foreign('id_buku')->references('id')->on('bukus');
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
        Schema::dropIfExists('tmppenjualans');
    }
}
