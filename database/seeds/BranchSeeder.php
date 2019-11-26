<?php

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Branch')->insert([['name' => 'Vĩnh Lộc',
                                      'BranchCode' => 'VL'],
                                     ['name' => '3 tháng 2',
                                      'BranchCode' => '32'],
                                     ['name' => 'Long An',
                                      'BranchCode' => 'LA']]);
    }
}
