<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mstate extends Model
{
    //
    public $primaryKey='user_id';
    public $table='mstates';
    protected $fillable = ['user_id','state'];
}
