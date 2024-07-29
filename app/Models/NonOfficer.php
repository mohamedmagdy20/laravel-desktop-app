<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonOfficer extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'department_id',
        'degree_id',
        'job_name',
        'date_upgrade',
        'religion',
        'city',
        'phone',
        'weapon_name',
        'status',
        'vaction_note',
        'note'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id');
    }

    public function degree()
    {
        return $this->belongsTo(Degree::class,'degree_id');
    }

}
