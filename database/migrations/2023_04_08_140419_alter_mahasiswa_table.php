<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->char('nim',8)->unique();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->decimal('ipk',3,2)->default(1.00);
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
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->renameColumn('NAMA_LENGKAP','nama');
            $table->dropColumn('alamat');
            $table->decimal('ipk',3,2)->default(1.00);
        });
    }
}
