<?php

use Illuminate\Database\Seeder;

class MemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Memo::class, 10)->make();
    }
}
