<div class="container">
    <div class="row">
        <div class="col-md-12">

                        <h4>Bootstrap Snipp for Datatable</h4>
                        <div class="table-responsive">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th><input type="checkbox" id="checkall"/></th>
                                <th>Id</th>
                                <th>Staff Type</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>DOB</th>
                                <th>Date of Hire</th>
                                <th>SSN</th>
                                <th>Phone Number</th>
                                <th>Edit</th>

                                <th>Delete</th>
                                </thead>
                                <tbody>
                                @foreach ($columndata as $object )
                                    <tr>
                                        <td><input type="checkbox" class="checkthis"/></td>
                                        <td>{{$object->id}}</td>
                            <td>{{$object->staff_type}}</td>
                            <td>{{$object->first.$object->last}}</td>
                            <td>{{$object->email}}</td>
                            <td>{{$object->dob}}</td>
                            <td>{{$object->dateofhire}}</td>
                            <td>{{$object->ssn}}</td>
                            <td>{{$object->phonenumber}}</td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Edit">
                                    <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit"><span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </p>
                            </td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete">
                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete"><span class="glyphicon glyphicon-trash"></span>
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
