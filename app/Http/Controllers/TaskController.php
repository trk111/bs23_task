<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\CatetoryRelations;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function task1()
    {

        $categories = Category::select('category.Name as category_name', DB::raw('count(Item.Id) as total_items'))
            ->leftJoin('Item_category_relations', 'category.Id', '=', 'item_category_relations.categoryId')
            ->leftJoin('Item', 'Item_category_relations.ItemNumber', '=', 'Item.Number')
            ->groupBy('category.Id','category_name')
            ->orderByDesc('total_items')
            ->get();

        return view('tasks/task1',compact( 'categories'));
    }

    public function task2()
    {
        $categories = Category::orderBy('Name')->get();

        return view('tasks/task2',compact( 'categories'));
    }
}
