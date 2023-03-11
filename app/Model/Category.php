<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

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

    public static function category_wise_count()
    {
        $result = Category::select('category.Name as category_name', DB::raw('count(Item.Id) as total_items'))
            ->leftJoin('Item_category_relations', 'category.Id', '=', 'item_category_relations.categoryId')
            ->leftJoin('Item', 'Item_category_relations.ItemNumber', '=', 'Item.Number')
            ->groupBy('category.Id','category_name')
            ->orderByDesc('total_items')
            ->get();

        return $result;
    }
}
