<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = "doctor";
    protected $fillable = ['id','nama','alamat','notelp'];

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
}
