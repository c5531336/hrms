<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TempSalaryCalculation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TempSalaryCalculation', function (Blueprint $table) {
            /**
             * 'EmployeeId'    => $employeeId,
             * 'RawSalaryByHours' => $salaryByHours,
             * 'RawSalaryByMonth' => $salaryByMonth,
             * 'RawSalaryByOverTime'=>$salaryByOverTime,
             * 'RawFoodAllowance'=>$foodAllowance,
             * 'RawTimeAllowance'=>$workingTimeAllowance,
             * 'RawDepartmentAllowance'=>$departmentAllowance,
             * 'TotalWorkingDay'    => $workingDays,
             * 'TotalWorkingTime'  => $workingHours,
             * 'TotalOverTime'=>$overTimeHours,
             * 'Month'=>$month,
             * 'Year'=>$year
             */
            $table->bigIncrements('id');
            $table->bigInteger('EmployeeId');

            $table->integer('Month');
            $table->integer('Year');

            $table->double('RawSalaryByHours', 20, 5)->default(0);
            $table->double('RawSalaryByMonth', 20, 5)->default(0);
            $table->double('RawSalaryByOverTime', 20, 5)->default(0);

            $table->double('RawFoodAllowance', 20, 5)->default(0);
            $table->double('RawTimeAllowance', 20, 5)->default(0);
            $table->double('RawDepartmentAllowance', 20, 5)->default(0);

            $table->double('TotalProductSalary',20,5)->default(0);

            $table->double('TotalWorkingTime', 20, 5)->default(0);
            $table->double('TotalWorkingDay', 20, 5)->default(0);
            $table->double('TotalOverTime', 20, 5)->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TempSalaryCalculation');
    }
}
