<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTbAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_admin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 20)->nullable()->unique('username');
			$table->string('nama', 100)->nullable();
			$table->string('password')->nullable();
			$table->rememberToken();
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
		Schema::dropIfExists('tb_admin');
	}

}
