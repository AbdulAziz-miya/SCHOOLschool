<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name changing
    protected $table='posts';
    public $primaryKey ='id';
    public $timestamps=true;
    public function user(){
        return $this->belongsTo('App/user');
    }
    
    
}
