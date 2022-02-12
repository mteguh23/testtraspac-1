<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('pegawai_id');
            $table->foreignId('profile_id')->unsigned()
                ->constrained('profile','profile_id')
                ->onDelete('cascade');
            $table->foreignId('unit_id')->unsigned()
                ->constrained('unit','unit_id')
                ->onDelete('cascade');
            $table->foreignId('jabatan_id')->unsigned()
                ->constrained('jabatan','jabatan_id')
                ->onDelete('cascade');
            $table->foreignId('eselon_id')->unsigned()
                ->constrained('eselon','eselon_id')
                ->onDelete('cascade');
            $table->foreignId('golongan_id')->unsigned()
                ->constrained('golongan','golongan_id')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pegawai');
    }
};
