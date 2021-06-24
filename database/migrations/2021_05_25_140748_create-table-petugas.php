<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugas extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('petugas', function (Blueprint $table) {
			$table->id();
			$table->string('nama');
			$table->string('username')->unique();
			$table->string('password')->unique();
			$table->bigInteger('telepon');
			$table->string('alamat');
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
		Schema::dropIfExists('petugas');
	}
}
