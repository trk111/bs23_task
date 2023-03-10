<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ItemCategoryRelations extends Model
{
    protected $table = 'Item_category_relations';

    public static function categoryItemCount($categories)
    {
        return ItemCategoryRelations::whereIn('categoryId',$categories)->get()->count();
    }
}
