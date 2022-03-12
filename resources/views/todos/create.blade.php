@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Todo List</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/todos') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Detail</label>
                                <textarea name="detail" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <input type="hidden" name="status" value="waiting">

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Todo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection