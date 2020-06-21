<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JournalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coas = [
            ['name' => 'Receipt'],
            ['name' => 'Payment']            
        ];
       

        DB::table('journal_types')->insert($coas);
    }
}
