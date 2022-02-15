<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCruppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_crupps', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor')->nullable();
            $table->char("no_upp");
            $table->char("tanggal_upp");
            $table->char("departemen");
            $table->char("manager_approval");
            $table->char("email_manager_approval1");
            $table->char("pengaju");
            $table->char("email_pengaju");
            $table->char("kategori_prosedur");
            $table->char("kode_prosedur");
            $table->char("nama_dokumen");
            $table->char("sebelum_perubahan");
            $table->char("setelah_perubahan");
            $table->text("alasan");
            $table->string("fileini");
            $table->char("tanggal_permohonan_berlaku");
            $table->string('progres')->nullable();
            $table->integer("status")->nullable();
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
        Schema::dropIfExists('tbl_crupps');
    }
}
