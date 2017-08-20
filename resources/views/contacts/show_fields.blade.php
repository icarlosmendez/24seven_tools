<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $contact->id !!}</p>
</div> -->

<!-- Name First Field -->
<div class="form-group">
    {!! Form::label('name_first', 'Name First:') !!}
    <p>{!! $contact->name_first !!}</p>
</div>

<!-- Name Last Field -->
<div class="form-group">
    {!! Form::label('name_last', 'Name Last:') !!}
    <p>{!! $contact->name_last !!}</p>
</div>

<!-- Cell Field -->
<div class="form-group">
    {!! Form::label('cell', 'Cell:') !!}
    <p>{!! $contact->cell !!}</p>
</div>

<!-- Land Field -->
<div class="form-group">
    {!! Form::label('land', 'Land:') !!}
    <p>{!! $contact->land !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>
        <a href="mailto:{!! $contact->email !!}">{!! $contact->email !!}</a>
    </p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $contact->title !!}</p>
</div>

<!-- Company Field -->
<div class="form-group">
    {!! Form::label('company', 'Company:') !!}
    <p>{!! $contact->company !!}</p>
</div>

<!-- Department Field -->
<div class="form-group">
    {!! Form::label('department', 'Department:') !!}
    <p>{!! $contact->department !!}</p>
</div>

<!-- Created At Field -->
<!-- <div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $contact->created_at !!}</p>
</div> -->

<!-- Deleted At Field -->
<!-- <div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $contact->deleted_at !!}</p>
</div> -->

<!-- Updated At Field -->
<!-- <div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $contact->updated_at !!}</p>
</div> -->

{!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
    <div class='btn-group pull-right' style="padding-right: 20px">
        <a href="{!! route('contacts.index') !!}" class="btn btn-default">Back</a>
        <a href="{!! route('contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-s'>
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        {!! Form::button(
            '<i class="glyphicon glyphicon-trash"></i>', 
                [
                    'type' => 'submit', 
                    'class' => 'btn btn-danger btn-s', 
                    'onclick' => "return confirm('Are you sure?')
                "]
            ) 
        !!}
    </div>
{!! Form::close() !!}

