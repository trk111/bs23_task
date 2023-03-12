<?php
    $ChildCategories = array();
        //this loop is expensive-increasing time and space both complexity
        //To DO - this can be managed other way
        foreach($childs as $child)
        {
            array_push($ChildCategories,$child->categoryId);
        }

        $childs = \App\Model\Category::whereIn('Id',$ChildCategories)->orderBy('Name')->get();
?>

<ul>
    <details open>
        <summary></summary>
            @foreach($childs as $child)
                <li>
                    {{$child->Name}}

                    <?php
                        //Item count Category wise - To DO - I dont its a standard solution
                        $cats = array($child->Id);
                        $categories = \App\Http\Controllers\TaskController::get_category_child($cats);
                        echo ' ( '.\App\Model\ItemCategoryRelations::categoryItemCount($categories).' )';
                    ?>
                        @if($child->childs)
                            @include('includes/manageChild',['childs' => $child->childs])
                        @endif
                </li>
            @endforeach
    </details>
</ul>
