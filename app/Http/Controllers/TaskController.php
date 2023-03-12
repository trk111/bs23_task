<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\CatetoryRelations;
use App\Model\ItemCategoryRelations;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function task1()
    {
        $categories = Category::category_wise_count();

        return view('tasks/task1',compact( 'categories'));
    }

    public function task2()
    {
        $categories = Category::orderBy('Name')->get();

        return view('tasks/task2',compact( 'categories'));
    }

    public static function get_category_child($ids){

        $categs =  CatetoryRelations::whereIn('ParentcategoryId',$ids)->orderBy('categoryId')->pluck('categoryId')->toArray();

        if (!empty($categs))
        {
            $ids =array_merge($ids,$categs);

            return self::get_category_child($ids);
        }

        return array_unique($ids);
    }


}
