<?php

use App\Asset;
use Illuminate\Database\Seeder;

class AssetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Asset::class, 100)->create();
    }
}
