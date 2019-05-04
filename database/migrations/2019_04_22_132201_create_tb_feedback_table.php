<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbFeedbackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_feedback', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_artikel_penyakit')->nullable()->index('id_artikel_penyakit');
			$table->string('nama', 200)->nullable();
			$table->string('isi', 10000)->nullable();
			$table->integer('rating')->nullable();
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
		Schema::dropIfExists('tb_feedback');
	}

}
