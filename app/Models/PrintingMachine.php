<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintingMachine extends Model
{
    use HasFactory;
    protected $fillable = [
        'companies_id',
        'name',
        'state',
    ];
}
