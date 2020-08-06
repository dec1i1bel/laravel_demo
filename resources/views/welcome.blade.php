<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        
    </head>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Задача</th>
                    <th scope="col">Описание</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <form action="/task/{{ $task->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input class="btn btn-outline-danger" type="submit" value="Удалить"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-outline-primary" href="/submit">добавить задачу</a>
    </body>
</html>
