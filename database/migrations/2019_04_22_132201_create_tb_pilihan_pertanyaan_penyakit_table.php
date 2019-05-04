<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPilihanPertanyaanPenyakitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_pilihan_pertanyaan_penyakit', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_pertanyaan_penyakit')->nullable()->index('id_pertanyaan_penyakit');
			$table->string('pilihan', 1000)->nullable();
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
		Schema::dropIfExists('tb_pilihan_pertanyaan_penyakit');
	}

}
