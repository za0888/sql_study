<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;

    protected $primaryKey = 'empno';
    protected $fillable = [
        'ename',
        'job',
        'mgr',
        'comm',
        'hiredate'
    ];

    public function dept()
    {
        return $this->belongsTo(Dept::class)->withDefault('');
    }

    protected function ename():Attribute
    {
        return Attribute::make(
            set:fn($value)=>strtoupper($value)
        );
    }

    protected function job():Attribute
    {
        return Attribute::make(
            set:fn($value)=>strtoupper($value)
        );
    }
}
