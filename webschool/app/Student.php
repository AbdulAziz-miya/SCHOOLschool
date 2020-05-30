<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model

    {
        //table name changing
        protected $table='students';
        public $primaryKey ='id';
        public $timestamps=true;
        public function user(){
            return $this->belongsTo('App/user');
        }
        
        
    }
   


