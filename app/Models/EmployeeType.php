<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmployeeType extends Model
{
    use HasFactory;
    protected $table = 'employee_type';
    protected $fillable = [];

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(Employee::class);
    }
}
