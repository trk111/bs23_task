<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    //use SoftDeletes;
    //protected $softDelet = true;

    protected $table = 'category';

    protected $fillable = [
        'Name',
        'Number',
        'SystemKey',
        'Note',
        'Priority',
        'Disabled',
    ];

    public function childs(){
        return $this->hasMany(CatetoryRelations::class,'ParentcategoryId','Id')->with('category');
    }
}
