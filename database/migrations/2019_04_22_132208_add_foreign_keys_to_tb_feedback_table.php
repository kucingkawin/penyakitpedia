<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTbFeedbackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tb_feedback', function(Blueprint $table)
		{
			$table->foreign('id_artikel_penyakit', 'tb_feedback_ibfk_1')->references('id')->on('tb_artikel_penyakit')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tb_feedback', function(Blueprint $table)
		{
			$table->dropForeign('tb_feedback_ibfk_1');
		});
	}

}
