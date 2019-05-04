<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbPertanyaanPenyakitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_pertanyaan_penyakit', function(Blueprint $table)
		{
			$table->foreign('id_artikel_penyakit', 'tb_pertanyaan_penyakit_ibfk_1')->references('id')->on('tb_artikel_penyakit')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_pertanyaan_penyakit', function(Blueprint $table)
		{
			$table->dropForeign('tb_pertanyaan_penyakit_ibfk_1');
		});
	}

}
