<?php  
 namespace App;  
 use Illuminate\Database\Eloquent\Model;  
 class image extends Model  
 {  
    protected $table='image';
    public function user(){
         return $this->belongsTo('User::class');         
    }

    public function company(){
         return $this->belongsTo('Company::class');
    }
 }  