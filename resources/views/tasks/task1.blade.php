<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
</head>
<body>

<div class="container">
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

</body>

<script>
    $(document).ready(function () {
        $('#task1').DataTable();
    });
</script>
</html>
