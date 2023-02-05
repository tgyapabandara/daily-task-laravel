<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="text-center"> Daily Task
            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{$error}}</div>
                    @endforeach
                    <form action="/savetask" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task_name" placeholder="Enter Your task">
                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                        <br>

                    </form>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Comleted</th>
                        <th>Action</th>
                        <th>Delete Task</th>
                        <th>Update Task Description</th>
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                                @if($task->iscompleted)
                                <button class="btn btn-success">completed</button>
                                @else
                                <button class="btn btn-warning">Not Completed</button>
                                @endif
                            </td>
                            @if(!$task->iscompleted)
                            <td> <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark as completed</a></td>
                            @else
                            <td> <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark as not completed</a></td>
                            @endif
                            <td> <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete Task</a></td>
                            <!-- <td><a href="/udpatedesctask/{{$task->id}}" class="btn btn-success">Update Description</a></td> -->
                             <td><a href="#" class="btn btn-success">Update Description</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


</body>

</html>