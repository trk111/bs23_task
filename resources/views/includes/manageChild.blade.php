<?php
    $ChildCategories = array();
        //this loop is expensive-increasing time and space both complexity
        //To DO can be managed by other way
        foreach($childs as $child)
        {
            array_push($ChildCategories,$child->categoryId);
        }

        $childs = \App\Model\Category::whereIn('Id',$ChildCategories)->orderBy('Name')->get();
?>

<ul>
    @foreach($childs as $child)
        <li>
            {{$child->Name}}
                @if($child->childs)
                    @include('includes/manageChild',['childs' => $child->childs])
                @endif
        </li>
    @endforeach
</ul>
