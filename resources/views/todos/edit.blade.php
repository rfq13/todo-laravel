@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Todo List</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('/todos/' . $todo->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Detail</label>
                                <textarea name="detail" class="form-control" id="" cols="30" rows="10">{{ $todo->detail }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="done" name="status" {{ $todo->status == 'done' ? 'checked' : '' }}> Done
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="on process" name="status" {{ $todo->status == 'on process' ? 'checked' : '' }}> On Process
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="waiting" name="status" {{ $todo->status == 'waiting' ? 'checked' : '' }}> Waiting
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Todo</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('script')
<script>
    // $('input[name=status]').val('{{ $todo->status }}');
</script>
    
@endpush --}}
