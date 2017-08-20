<!-- Name First Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_first', 'Name First:') !!}
    {!! Form::text('name_first', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Last Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_last', 'Name Last:') !!}
    {!! Form::text('name_last', null, ['class' => 'form-control']) !!}
</div>

<!-- Cell Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cell', 'Cell:') !!}
    {!! Form::number('cell', null, ['class' => 'form-control']) !!}
</div>

<!-- Land Field -->
<div class="form-group col-sm-6">
    {!! Form::label('land', 'Land:') !!}
    {!! Form::number('land', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company', 'Company:') !!}
    {!! Form::text('company', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department', 'Department:') !!}
    {!! Form::text('department', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contacts.index') !!}" class="btn btn-default">Cancel</a>
</div>
