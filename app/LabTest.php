<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['name', 'shortname'];

    public function module() {
        return $this->belongsTo('App\Module');
    }
}
