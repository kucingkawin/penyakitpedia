<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbArtikelPenyakitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_artikel_penyakit', function(Blueprint $table)
		{
			$table->foreign('id_penyakit', 'tb_artikel_penyakit_ibfk_1')->references('id')->on('tb_penyakit')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_artikel_penyakit', function(Blueprint $table)
		{
			$table->dropForeign('tb_artikel_penyakit_ibfk_1');
		});
	}

}
