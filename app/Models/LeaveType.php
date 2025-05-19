<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    protected $guarded = [];

    public function shift_templates()
    {
        return $this->hasMany(ShiftTemplate::class);
    }
}
