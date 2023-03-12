@include('includes/header')

<div class="container">

    <div class="row">
        <div class="col-md-3 offset-6" style="font-weight: bold">
            @include('includes/menu')
        </div>
    </div>

    <h2>Task 2</h2>
    <p>Uncountable child in each parent category and a child might be a
        parent of another category: Category List</p>
    <ul class="tree">
        <?php foreach ($categories as $category) { ?>
            <li class="tree">
                <?=$category->Name;?>
                <?php
                    $cats = array($category->Id);
                    $categories = \App\Http\Controllers\TaskController::get_category_child($cats);
                    echo ' ( '.\App\Model\ItemCategoryRelations::categoryItemCount($categories).' )';
                ?>
                    @if(!$category->childs->isEmpty())
                        @include('includes/manageChild',['childs' => $category->childs])
                    @endif
            </li>

        <?php } ?>
    </ul>

</div>

@include('includes/footer')
