<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShiftTemplate extends Model
{
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function leaveType()
    {
        return $this->belongsTo(LeaveType::class);
    }
}
