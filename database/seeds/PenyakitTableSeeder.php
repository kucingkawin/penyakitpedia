<?php

use App\Penyakit;
use Illuminate\Database\Seeder;

class PenyakitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Penyakit::class, 10)->create();
    }
}
