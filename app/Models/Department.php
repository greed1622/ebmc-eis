<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function shift_templates()
    {
        return $this->hasMany(ShiftTemplate::class);
    }
}
