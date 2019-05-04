<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbArtikelPenyakitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_artikel_penyakit', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_penyakit')->nullable()->index('id_penyakit');
			$table->string('judul', 100)->nullable();
			$table->string('konten', 10000)->nullable();
			$table->date('tanggal')->nullable();
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
		Schema::dropIfExists('tb_artikel_penyakit');
	}

}
