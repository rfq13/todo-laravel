@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todo List</div>
                <div class="panel-body">
                    <a href="{{ url('todos/create') }}" class="btn btn-primary">Add todo</a>

                    <br>
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Status</th>
                                <th>Action</th>
                            </th>

                            @if(! count($todos))
                                <tr>
                                    <td colspan="3">No todo</td>
                                </tr>
                            @endif
                            @foreach($todos as $todo)
                                <tr>
                                    <td>{{ $todo->title }}</td>
                                    <td>{{ $todo->detail }}</td>
                                    <td>{{ $todo->status }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ url('todos/'.$todo->id.'/edit') }}">Edit</a>
                                        <a class="btn btn-danger" href="{{ url('todos/'.$todo->id.'/delete') }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection