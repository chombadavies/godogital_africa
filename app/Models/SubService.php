<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;
    
    protected $guarded=['id'];
    public function services(){
        return $this->belongsTo('App\Models\Service');
    }
}
