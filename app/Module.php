<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['number'];

    public function labtests() {
        return $this->hasMany('App\LabTest');
    }
}
