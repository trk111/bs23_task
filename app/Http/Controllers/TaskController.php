<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;


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
}
