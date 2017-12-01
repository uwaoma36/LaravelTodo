@extends('layouts.app')
@section('content')
    <div class="panel panel-info">
        <div class="heading">
            <h2 class="text-center">Edit Todo [{{$todo->id}}]</h2>
        </div>
        <div class="panel-body">
            <form action="{{route('todos.update',['id'=>$todo->id])}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="todo">Todo</label>
                    <input type="text" name="todo" value="{{$todo->todo}}" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection