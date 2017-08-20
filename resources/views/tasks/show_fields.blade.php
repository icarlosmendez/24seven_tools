<!-- Id Field -->
<div class="form-group">
    {!! Form::label('added_by', 'Created By:') !!}
    <p>{!! $task->added_by !!}</p>
</div>

<!-- User Id Field -->
<!-- <div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $task->user_id !!}</p>
</div> -->

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

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $task->deleted_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $task->updated_at !!}</p>
</div>

