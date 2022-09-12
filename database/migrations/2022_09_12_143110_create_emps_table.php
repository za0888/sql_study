<?php

use App\Models\Dept;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->id('empno');
            $table->string('ename');
            $table->string('job');
            $table->integer('mgr')->nullable();
            $table->date('hiredate');
            $table->integer('comm')->nullable();
            $table->foreignIdFor(Dept::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emps');
    }
};
