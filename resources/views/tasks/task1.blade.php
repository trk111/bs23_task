@include('includes/header')

<div class="container">

    <div class="row">
        <div class="col-md-3 offset-6" style="font-weight: bold">
            @include('includes/menu')
        </div>
    </div>

    <h2>Task 1</h2>
    <p>Show all categories with total item and order categories by total Items (DESC):</p>
    <table class="table table-striped" id="task1">
        <thead style="font-weight: bold">
            <tr>
                <td>SL#</td>
                <td>Category Name</td>
                <td>Total Items</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($categories as $category) { ?>
                <tr>
                    <td>{{$i++}}</td>
                    <td><?=$category->category_name;?></td>
                    <td>{{$category->total_items}}</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

@include('includes/footer')
