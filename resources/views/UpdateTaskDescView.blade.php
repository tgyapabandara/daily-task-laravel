<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Update Task Description</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="update" method="post">
                    @csrf
                    <label for="task">Enter Task</label>
                    <input type="text" class="form-control" name="task" value="{{$taskdata->task}}">

                    <br>
                    <input type="text" name="t_id" value="{{$taskdata->id}}">
                    <input type="submit" class="btn btn-warning" value="UPDATE">
                    &nbsp; &nbsp;<input type="button" class="btn btn-danger" value="cancel">
                </form>
            </div>
        </div>
    </div>
</body>

</html>