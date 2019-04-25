<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LabTest extends Model
{
    protected $fillable = ['name', 'shortname', 'module_id'];

    public function module() {
        return $this->belongsTo('App\Module');
    }
}
