<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyHistory extends Model
{
    use HasFactory;
    protected $primaryKey = 'patient_id';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $guarded = [];
}
