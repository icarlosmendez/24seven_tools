<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('added_by', 'Created By:') !!}
    {!! Form::text('added_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Task Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6" >
	{!! Form::label('due_date', 'Due Date:') !!}
	{!! Form::text('due_date', null, ['class' => 'form-control', 'id' => 'datepicker']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tasks.index') !!}" class="btn btn-default">Cancel</a>
</div>

<script>
	$( function() {
		$( "#datepicker" ).datepicker();
	} );
</script>