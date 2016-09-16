@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Todo List</div>
                <div class="panel-body">
                    <a href="{{ url('todos/create') }}" class="btn btn-primary">Add todo</a>

                    <hr>

                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Is Done</th>
                            </th>

                            @foreach($todos as $todo)
                                <tr>
                                    <td>{{ $todo->name }}</td>
                                    <td>{{ $todo->is_done ? 'Done' : 'Not Done' }}</td>
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