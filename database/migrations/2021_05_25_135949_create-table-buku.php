<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buku', function (Blueprint $table) {
			$table->id();
			$table->string('judul');
			$table->string('pengarang');
			$table->year('tahun_terbit');
			$table->string('tempat_terbit');
			$table->bigInteger('cetakan');
			$table->bigInteger('tebal');
			$table->bigInteger('harga');
			$table->bigInteger('stok');
			$table->string('kategori');
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
		Schema::dropIfExists('buku');
	}
}
