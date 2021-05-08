<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_id',
        'department',
        'staff_name',
        'wanted_id',
        'court_name',
        'accuse_id_card',
        'accuse_name',
        'allegation_detail',
        'attorney_name',
        'expire_date',
        'announce_date',
        'status'
    ];
    
}
