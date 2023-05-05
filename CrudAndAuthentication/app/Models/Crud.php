<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crud extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function setEmailAttribute($value){
        $this->attributes['email'] = ucwords($value);
    }
    public function getEmailAttribute($value){
        return ucwords($value);
    }
}
