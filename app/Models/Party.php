<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function package() {
        return $this->belongsTo(Package::class);
    }
}
