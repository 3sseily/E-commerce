<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'quantity', 'descc', 'image'];

    //accessor
    public function getNamePriceAttribute()
    {
        return $this->name . ",," . $this->price;
    }

    //mutator
    public function setNameAttribute($val){
        $this->attributes['name'] = strtoupper($val);
    }

}