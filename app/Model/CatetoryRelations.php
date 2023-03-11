<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CatetoryRelations extends Model
{
    protected $table = 'catetory_relations';

    protected $fillable = [
        'UUID',
        'categoryId',
        'ParentcategoryId',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'categoryId','Id');
    }
}
