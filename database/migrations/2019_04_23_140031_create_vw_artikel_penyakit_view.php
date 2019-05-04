<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVwArtikelPenyakitView extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement("CREATE VIEW IF NOT EXISTS vw_artikel_penyakit AS SELECT `tb_artikel_penyakit`.`id`, `tb_artikel_penyakit`.`id_penyakit`, `tb_penyakit`.`nama`, `tb_penyakit`.`deskripsi`, `tb_artikel_penyakit`.`judul`, `tb_artikel_penyakit`.`konten`, `tb_artikel_penyakit`.`created_at`, `tb_artikel_penyakit`.`updated_at` FROM `tb_artikel_penyakit` INNER JOIN `tb_penyakit` on `tb_artikel_penyakit`.`id_penyakit`=`tb_penyakit`.`id`");
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("DROP VIEW IF EXISTS vw_artikel_penyakit");
	}

}
