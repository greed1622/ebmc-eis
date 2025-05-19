<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComplianceRecord extends Model
{
    protected $guarded = [];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
    public function validatedBy()
    {
        return $this->belongsTo(Employee::class, 'validated_by');
    }
}
