<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('laporans', function (Blueprint $table) {
          $table->increments('id');
          $table->string('judul');
          $table->string('isi');
          $table->integer('id_user')->unsigned();
          $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
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
      Schema::dropIfExists('laporans');
    }
}
