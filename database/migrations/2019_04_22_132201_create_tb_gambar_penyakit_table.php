<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbGambarPenyakitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_gambar_penyakit', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_artikel_penyakit')->nullable()->index('id_artikel_penyakit');
			$table->string('gambar', 1000)->nullable();
			$table->string('kode_gambar', 20)->nullable();
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
		Schema::dropIfExists('tb_gambar_penyakit');
	}

}
