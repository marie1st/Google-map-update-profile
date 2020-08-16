<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        'name',
        'email',
        'contact_name',
        'phone',
        'image',
        'file',
        'address_address',
        'address_latitude',
        'address_longitude',
    ];
    public function image(){
        return $this->hasOne('App\image');
    }

}
