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
        <tr id="sortable">
            <td>{!! $task->added_by !!}</td>
            <td>{!! $task->name !!}</td>
            <td>{!! $task->details !!}</td>
            <td>{!! $task->due_date !!}</td>
            <td>
                {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tasks.show', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tasks.edit', [$task->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script type="text/javascript">
    $("#tabledivbody").sortable({
        items: "tr",
        cursor: 'move',
        opacity: 0.6,
        update: function() {
            sendOrderToServer();
        }
    });
   
    function sendOrderToServer() {
        var order = $("#tabledivbody").sortable("serialize");
   
        $.ajax({
        type: "POST", dataType: "json", url: "/path/to/updateorder/script",
        data: order,
        success: function(response) {
            if (response.status == "success") {
                window.location.href = window.location.href;
            } else {
                alert('Some error occurred');
            }
        }
        });
    }
</script>

<!-- <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
    $( "#draggable" ).draggable({
      connectToSortable: "#sortable",
      helper: "clone",
      revert: "invalid"
    });
    $( "tr, td" ).disableSelection();
  } );
  </script> -->