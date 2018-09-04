<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan');
            $table->string('bidang');
            $table->text('deskripsi');
            $table->date('tanggal_berdiri');
            $table->string('jenis_perusahaan');
            $table->enum('status', ['0','1','2']);
            $table->string('phone');
            $table->string('email');
            $table->text('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('negara');

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
        Schema::dropIfExists('companies');
    }
}
