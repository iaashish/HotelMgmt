<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
            </div>
            <div class="modal-body">
                <p>You are about to delete one track, this procedure is irreversible.</p>
                <p>Do you want to proceed?</p>
                <p class="debug-url"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4>List of hotel staff with their contact information.</h4>
            <div class="table-responsive">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                    <th>
                        <input type="checkbox" id="checkall"/>
                    </th>
                    <th>Id</th>
                    <th>Staff Type</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Hire</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    @foreach ($columndata as $object )
                        <tr>
                            <td>
                                <input type="checkbox" class="checkthis"/>
                            </td>
                            <td>{{$object->id}}</td>
                            <td>{{$object->staff_type}}</td>
                            <td>{{$object->first.' '.$object->last}}</td>
                            <td>{{$object->email}}</td>
                            <td>{{$object->dateofhire}}</td>
                            <td>
                                <button type="button"  data-href="{{$object->dateofhire}}" data-toggle="modal" class="btn btn-primary btn-xs" data-target="#confirm-delete">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                            </td>
                            <td>
                                <form method="POST" action="/deletestaff" id="form1">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{$object->id}}" name="id">
                                </form>
                                <p data-placement="top" data-toggle="tooltip" title="Delete">
                                    <button type="submit" form="form1" value="Submit" class="btn btn-danger btn-xs"
                                            data-title="Delete" data-toggle="modal" data-target="#delete"><span
                                                class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </p>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $columndata->links() }}
            </div>
        </div>
    </div>
</div>
<script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $('.debug-url').html('Delete URL: <strong>' + $(e.relatedTarget).data('href') + '</strong>');
    });
</script>