<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //This for shortCreate
    // protected $fillable = ['name', 'email','active'];
    //Or this for all
    protected $guarded = [];
    protected $attribute = [
        'active' => 1
    ];
    public function getActiveAttribute($attribute){

        return $this->activeOptions()[$attribute];
    }
    //
    //

    public function scopeActive($query){

        return $query->where('active' , 1);
    }
    //
    public function scopeInactive($query){

        return $query->where('active' , 0);
    }
    //
    public function company(){
        return $this->belongsTo(Company::class);
    }


    public function activeOptions(){
        return  [
            1 => 'Active',
            0 =>'Inactive',
        ];
    }
}
