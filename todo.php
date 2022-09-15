<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container p-3">
        <h3 class="text-center">TODO APPLICATION</h3>
        <form action="save-todo.php" method="post">
            <input type="text" name="todo" class="form-control" placeholder="Enter your name....">
            <button type="submit" class="btn btn-primary mt-2 mb-3">Add Todo</button>
        </form>
        <!-- table -->

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Todo Items</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Go To Shopping</td>
                    <td><button class="btn btn-danger">Delete</button></td>

                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Go To Shopping</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Go To Shopping</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>