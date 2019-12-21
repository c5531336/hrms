<?php

namespace App\Http\Controllers;

use App\Models\TempSalaryCalculation;
use App\Models\TimeKeepingMachines;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use App\Libs\SalaryCalculator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //    public function __construct()
    //    {
    //        $this->middleware('auth');
    //    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function index2()
    {
        return view('home2');
    }

    public function index3()
    {
        return view('home3');
    }

    public function testCreateTime()
    {
       $result = SalaryCalculator::SalaryByHoursCalculator();
       dd($result);
    }
}
