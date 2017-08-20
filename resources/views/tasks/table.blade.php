<table class="table table-responsive" id="tasks-table">
    <thead>
        <th>Created By</th>
        <th>Task Name</th>
        <th>Details</th>
        <th>Due Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($tasks as $task)
        <tr>
            <td>{!! $task->added_by !!}</td>
            <td>{!! $task->name !!}</td>
            <td>{!! $task->details !!}</td>
            <td>{!! $task->due_date !!}</td>
            <td>
                {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'>
                        <i class="glyphicon glyphicon-eye-open"></i>
                    </a>
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>