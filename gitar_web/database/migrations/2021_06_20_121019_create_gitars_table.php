<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGitarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gitars', function (Blueprint $table) {
            $table->increments('id_gitar');
            $table->string('nama');
            $table->integer('merk');
            $table->integer('jenis');
            $table->string('harga');
            $table->string('gambar')->default('none');;
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
        Schema::dropIfExists('gitars');
    }
}
