<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbPertanyaanPenyakitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_pertanyaan_penyakit', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_artikel_penyakit')->nullable()->index('id_artikel_penyakit');
			$table->string('pertanyaan', 1000)->nullable();
			$table->string('jawaban', 1000)->nullable();
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
		Schema::dropIfExists('tb_pertanyaan_penyakit');
	}

}
