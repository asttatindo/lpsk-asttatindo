<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RequestAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_account', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('ttl');
            $table->string('gender');
            $table->string('kebangsaan');
            $table->string('negara')->nullable();
            $table->string('alamat');
            $table->decimal('kode_pos', 20, 0);
            $table->string('pendidikan');
            $table->decimal('no_rumah_pribadi', 20, 0);
            $table->decimal('no_hp_pribadi', 20, 0);
            $table->decimal('no_kantor_pribadi', 20, 0);
            $table->string('email');
            $table->string('nama_perusahaan');
            $table->string('jabatan');
            $table->string('alamat_perusahaan');
            $table->decimal('kode_pos_perusahaan', 20, 0);
            $table->decimal('no_telepon_perusahaan', 20, 0);
            $table->decimal('fax_perusahaan', 20, 0);
            $table->string('email_perusahaan');
            $table->string('tujuan_asesmen');
            $table->string('tujuan_lain');
            $table->string('skema');
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
