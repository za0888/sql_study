<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    use HasFactory;

    protected $primaryKey='deptno';

    protected $fillable=[
      'dname',
      'loc'
    ];

    public function emps()
    {
        return $this->hasMany(Emp::class);
    }

    protected function dname():Attribute
    {
        return Attribute::make(
            set:fn($value)=>strtoupper($value)
        );
    }
    protected function loc():Attribute
    {
        return Attribute::make(
            set:fn($value)=>strtoupper($value)
        );
    }
}
