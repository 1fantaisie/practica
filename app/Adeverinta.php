<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adeverinta extends Model
{
    //
     //
     protected $table = 'adeverinta';
    protected $primarykey="user_id";
	public $timestamps = false;
   protected $fillable = array(
        'camp1',
        'camp2'
    );
    
}
