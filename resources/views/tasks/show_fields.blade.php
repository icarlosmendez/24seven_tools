<!-- Id Field -->
<div class="form-group">
    {!! Form::label('added_by', 'Created By:') !!}
    <p>{!! $task->added_by !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Task Name:') !!}
    <p>{!! $task->name !!}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{!! $task->details !!}</p>
</div>

<!-- Due Date Field -->
<div class="form-group">
    {!! Form::label('due_date', 'Due Date:') !!}
    <p>{!! $task->due_date !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $task->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Last Updated At:') !!}
    <p>{!! $task->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Marked as Completed At:') !!}
    <p>{!! $task->deleted_at !!}</p>
</div>

<div class="btn-group pull-right">
    <a href="{!! route('tasks.edit', [$task->id]) !!}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    
    {!! Form::button(
        '<i class="glyphicon glyphicon-trash"></i>', 
            [
                'type'      => 'submit', 
                'class'     => 'btn btn-danger btn-xs', 
                'onclick'   => 'return confirm("Are you sure?")'
            ]
        ) 
    !!}
</div>