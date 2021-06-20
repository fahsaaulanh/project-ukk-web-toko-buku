<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettinglapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settinglaps', function (Blueprint $table) {
            $table->integer('id');
            $table->primary('id');
            $table->string('nama_perusahaan');
            $table->string('alamat');
            $table->string('no_tlpn');
            $table->string('web');
            $table->string('logo');
            $table->string('no_hp');
            $table->string('email');
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
        Schema::dropIfExists('settinglaps');
    }
}
