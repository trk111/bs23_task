<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="container">
    <h2>Task 2</h2>
    <p>Uncountable child in each parent category and a child might be a
        parent of another category: Category List</p>
    <ul>
        <?php foreach ($categories as $category) { ?>
            <li>
                <?=$category->Name;?>
                    @if(!$category->childs->isEmpty())
                        @include('includes/manageChild',['childs' => $category->childs])
                    @endif
            </li>

        <?php } ?>
    </ul>


</div>
</body>

</html>
