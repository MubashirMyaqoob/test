<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $table = 'cruds';
    protected $primarykey = 'id';

    public function setEmailAttribute($value){
        $this->attributes['email'] = ucfirst($value);
    }
}
