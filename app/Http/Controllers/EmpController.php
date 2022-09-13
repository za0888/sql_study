<?php

namespace App\Http\Controllers;

use App\Models\Emp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function show(Emp $emp)
    {
        //
    }

    public function whatComm()
    {
        $empsComm = DB::table('emps')->selectRaw('ename,coalesce(comm,0) as Commission')->get();
        return $empsComm;
    }

//Требуется отсортировать данные с применением некоего логического условия. Например,
//если значение JOB равно SALESМAN, сортировка выполняется по столбцу сомм,
//а в противном случае - по столбцу SAL. В итоге результирующее множество должно
//выглядеть следующим образом:
    public function sortCond()
    {
        $empsSortetedByCond = DB::table('emps')
            ->select('ename', 'sal', 'job', 'comm')
            ->orderByRaw(
                "case
            when job = ? then comm
             else sal end",
                ['SALESMAN']
            )
            ->get();

        return $empsSortetedByCond;
    }

    public function paymentStatus()
    {
//        https://laravel.com/docs/9.x/queries#selectraw
        $empsWithStatusPay = DB::table('emps')
            ->selectRaw('
            ename as Name,sal as Salary,
            case
             when sal <= 2000 then ?
            when sal >=4000 then ?
            else ?
            end as status
            ',
                ['UNDERPAID', 'OVERPAID', 'OK'])
            ->get();
        return $empsWithStatusPay;
    }

}
