@extends('layouts.app')

@section('content')
    <div class="panel panel-info">
            <div class="panel-heading text-center">
                <form class="form-inline" action="{{route('todos.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="input-group">
                        <input type="text" style="width:400px;" placeholder="Create New Todo" name="todo" class="form-control">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-success">create</button>
                        </div>
                    </div>
                </form><br>
                <h2 class="text-center">Todos List({{$todos->count()}})</h2>
            </div>
            <table class="table hover">
                <thead>
                    <th>Todo</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @foreach($todos as $todo)
                        <tr>
                            <td>{{$todo->todo}}</td>
                            <td><a href="{{route('todos.edit',['id'=>$todo->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                            <td><a href="{{route('todos.delete',['id'=>$todo->id])}}" class="btn btn-xs btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

@endsection('content')

