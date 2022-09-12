<?php

namespace Database\Seeders;

use App\Models\Dept;
use App\Models\Emp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        10 ACCOUNTING NEW YORK
//20 RESEARCH DALLAS
//30 SALES CНICAGO
//40 OPERATIONS boston
        $dept20 = Dept::where('dname', 'RESEARCH')->first();
        $dept20->emps()
            ->createMany([
                [
                    'ename' => 'Smith',
                    'job' => 'clerk',
                    'sal' => 800,
                    'mgr' => 7902,
                    'hiredate' => '17.12.1980',
                ],
                [
                    'ename' => 'Jones',
                    'job' => 'manager',
                    'sal' => 2975,
                    'mgr' => 7839,
                    'hiredate' => '02.04.1981',
                ],
                [
                    'ename' => 'Adams',
                    'job' => 'clerk',
                    'sal' => 1100,
                    'mgr' => 7788,
                    'hiredate' => '12.01.1983',
                ],
                [
                    'ename' => 'Scott',
                    'job' => 'Analyst',
                    'sal' => 3000,
                    'mgr' => 7839,
                    'hiredate' => '09.12.1982',
                ],
                [
                    'ename' => 'Ford',
                    'job' => 'Analyst',
                    'sal' => 3000,
                    'mgr' => 7536,
                    'hiredate' => '03.12.1981',
                ]
            ]);
        $dept30 = Dept::where('dname', 'SALES')->first();
        $dept30->emps()->createMany([
                [
                    'ename' => 'Allen',
                    'job' => 'Salesman',
                    'sal' => 1600,
                    'mgr' => 7698,
                    'hiredate' => '20.02.1980',
                    'comm' => 300,
                ],
                [
                    'ename' => 'Ward',
                    'job' => 'Salesman',
                    'sal' => 1250,
                    'mgr' => 7698,
                    'hiredate' => '02.02.1981',
                    'comm' => 500,
                ],
                [
                    'ename' => 'Blake',
                    'job' => 'Manager',
                    'sal' => 2850,
                    'mgr' => 7839,
                    'hiredate' => '01.05.1981',
//                    'comm' => '',
                ],
                [
                    'ename' => 'Turner',
                    'job' => 'Salesman',
                    'sal' => 1500,
                    'mgr' => 7698,
                    'hiredate' => '08.09.1981',
                    'comm' => 0,
                ],
                [
                    'ename' => 'James',
                    'job' => 'clerk',
                    'sal' => 950,
                    'mgr' => 7698,
                    'hiredate' => '03.12.1981',
                ],
                [
                    'ename' => 'martin',
                    'job' => 'salesman',
                    'sal' => 1250,
                    'mgr' => 7698,
                    'hiredate' => '28.09.1981',
                    'comm' => 1400
                ]
            ]

        );

        $dept10 = Dept::where('dname', 'ACCOUNTING')->first();
        $dept10->emps()->createMany([
            [
                'ename' => 'clark',
                'job' => 'manager',
                'sal' => 2450,
                'mgr' => 7839,
                'hiredate' => '09.06.1981',
            ],
            [
                'ename' => 'miller',
                'job' => 'clerk',
                'sal' => 1300,
                'mgr' => 7782,
                'hiredate' => '23.01.1982',
            ],
            [
                'ename' => 'king',
                'job' => 'president',
                'sal' => 5000,
                'mgr' => '7782',
                'hiredate' => '17.11.1981',
            ],
        ]);
    }
}
