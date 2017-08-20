<table class="table table-responsive" id="contacts-table">
    <thead>
        <th>Name First</th>
        <th>Name Last</th>
        <th>Cell</th>
        <th>Land</th>
        <th>Email</th>
        <th>Title</th>
        <th>Company</th>
        <th>Department</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{!! $contact->name_first !!}</td>
            <td>{!! $contact->name_last !!}</td>
            <td>{!! $contact->cell !!}</td>
            <td>{!! $contact->land !!}</td>
            <td>{!! $contact->email !!}</td>
            <td>{!! $contact->title !!}</td>
            <td>{!! $contact->company !!}</td>
            <td>{!! $contact->department !!}</td>
            <td>
                {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('contacts.show', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('contacts.edit', [$contact->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>