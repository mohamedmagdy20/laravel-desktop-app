<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','day','date','place','note','time_from','time_to'
    ];


    public function scopeFilter($query, $params)
    {

        if(isset($params['date_from']) || isset($params['date_to']) )
        {
            $query->whereBetween('date',[$params['date_from'],$params['date_to']]);
       
        }
        return $query;
    }
}
