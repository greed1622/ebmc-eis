<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function leave()
    {
        return $this->hasMany(Leave::class);
    }
    public function complianceRecords()
    {
        return $this->hasMany(ComplianceRecord::class, 'employee_id');
    }
    public function validatedComplianceRecords()
    {
        return $this->hasMany(ComplianceRecord::class, 'validated_by');
    }
    public function profile()
    {
        return $this->hasMany(Profile::class, 'employee_id');
    }
    public function approvedProfile()
    {
        return $this->hasMany(Profile::class, 'approved_by');
    }
}
