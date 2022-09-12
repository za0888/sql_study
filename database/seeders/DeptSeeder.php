<?php

namespace Database\Seeders;

use App\Models\Dept;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dept::create(['dname'=>'ACCOUNTING','loc'=>'New_york']);
        Dept::create(['dname'=>'Research','loc'=>'Dallas']);
        Dept::create(['dname'=>'Sales','loc'=>'Chicago']);
        Dept::create(['dname'=>'Oprations','loc'=>'Boston']);
    }
}
