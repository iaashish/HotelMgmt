<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Staff</h4>
            </div>
            <form class="form-horizontal" name="editform" id="editform" method="POST" action="">
                {{ csrf_field() }}
                <div class="modal-body">
                <div class="form-group">
                    <label for="first" class="col-md-4 control-label">First name</label>
                    <div class="col-md-6">
                        <input id="first" type="text" placeholder="First name" class="form-control" name="first"
                               value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="last" class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-6">
                        <input id="last" type="text" class="form-control" placeholder="Last name" name="last"
                               value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email"
                               value="" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="col-md-4 control-label">Address</label>
                    <div class="col-md-6">
                        <input id="address" placeholder="Address" type="text" class="form-control"
                               name="address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phonenumber" class="col-md-4 control-label">phone</label>
                    <div class="col-md-6">
                        <input id="phonenumber" placeholder="Phone" pattern="^\d{3} \d{3}-\d{4}$" type="tel"
                               class="form-control"
                               name="phonenumber" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="col-md-4 control-label">DOB</label>
                    <div class="col-md-6">
                        <input id="dob" type="date" class="form-control" name="dob">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dateofhire" class="col-md-4 control-label">DOJ</label>
                    <div class="col-md-6">
                        <input id="dateofhire" type="date" class="form-control" name="dateofhire">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ssn" class="col-md-4 control-label">SSN</label>
                    <div class="col-md-6">
                        <input id="ssn" type="number" class="form-control" name="ssn">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ssn" class="col-md-4 control-label">Staff Type</label>
                    <div class="col-md-6">
                        <select title="select staff " name="staff_type" id="staff_type" class="form-control">
                            <option selected="true" disabled="disabled" placeholder="Choose Staff Type">Choose
                                Staff Type
                            </option>
                            <option>Receptionist</option>
                            <option>Accountant</option>
                            <option>Maintanence</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
            </form>
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
                                <button type="button"
                                        data-action="/editstaff/{{$object->id}}"
                                        data-first = "{{$object->first}}"
                                        data-last = "{{$object->last}}"
                                        data-email="{{$object->email}}"
                                        data-doh="{{$object->dateofhire}}"
                                        data-dob="{{$object->dob}}"
                                        data-type="{{$object->staff_type}}"
                                        data-address="{{$object->address}}"
                                        data-ssn="{{$object->ssn}}"
                                        data-phone="{{$object->phonenumber}}"
                                        data-toggle="modal"
                                        class="btn btn-primary btn-xs"
                                        data-target="#confirm-delete">
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
        $('#first').val($(e.relatedTarget).data('first'));
        $('#last').val($(e.relatedTarget).data('last'));
        $('#email').val($(e.relatedTarget).data('email'));
        $('#address').val($(e.relatedTarget).data('address'));
        $('#phonenumber').val($(e.relatedTarget).data('phone'));
        $('#dateofhire').val($(e.relatedTarget).data('doh'));
        $('#staff_type').val($(e.relatedTarget).data('type'));
        $('#dob').val($(e.relatedTarget).data('dob'));
        $('#ssn').val($(e.relatedTarget).data('ssn'));
        $('#editform').attr('action', $(e.relatedTarget).data('action'));
    });
</script>