<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Department')->insert([['BranchId' => '1',
                                          'Name' => 'In Lụa',
                                          'DepartmentCode' => 'IL',
                                          'Description' => 'Tổ in lụa']]);

        DB::table('Department')->insert([['BranchId' => '1',
                                          'Name' => 'Dán si',
                                          'DepartmentCode' => 'ILDS',
                                          'ParentDepartmentId' => 1,
                                          'Description' => 'Tổ in lụa',
                                          'Allowance' => 10000],
                                         ['BranchId' => '1',
                                          'Name' => 'Kéo si',
                                          'DepartmentCode' => 'ILKS',
                                          'ParentDepartmentId' => 1,
                                          'Description' => 'Tổ in lụa',
                                          'Allowance' => 10000]]);
    }
}
