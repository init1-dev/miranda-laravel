<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = [];

    public function employeeType(): BelongsTo
    {
        return $this->belongsTo(EmployeeType::class);
    }
}
