<?php

namespace App\Models;

use App\Http\Controllers\SalaryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function salary() {
        return $this->belongsTo(Salary::class);
    }

    public function payroll() {
        return $this->hasMany(Payroll::class);
    }
}
