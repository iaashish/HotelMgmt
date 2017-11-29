@extends('layouts.managerheader')
@section('content')
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
        <div class="w3-row-padding">
            <div class="w3-third  w3-white">
                <div class="w3-content" style="max-width:1000px;margin-top:46px">
                    <div class="w3-container">
                        <form method="POST" action="/setroles">
                            {{ csrf_field() }}
                            <select title="Select Type" class="form-control" id="role" name="role">
                                <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                                    Choose Role Type
                                </option>
                                @foreach ($role as $object )
                                    <option value="{{$object->id}}">{{$object->name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <select title="Select Type" class="form-control" name="item_id" id="staffroles">
                                <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                                    Choose Staff
                                </option>
                                {{--@foreach ($staff as $object )--}} {{--
                        <option value="{{$object->id}}">{{$object->first.' '.$object->last}}</option>--}} {{--@endforeach--}}
                            </select>
                            <br>

                            <input type="submit" value="Assign" class="btn btn-primary">
                        </form>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <div class="w3-twothird">
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i></i>Roles
                    </h2>
                    <h4 class="w3-text-grey w3-padding-16"><i></i>Check list of roles for each staff member and the task they assigned to.
                </h4>
                    <div class="w3-container">
                        <h5 class="w3-opacity w3-xlarge w3-text-orange "><b>Receptionist</b></h5>
                        <hr>
                        <div class="w3-third">
                            <table style="width:800px;" class="w3-table-all w3-centered w3-card" border="1px" >
                                <thead>
                                <tr class="w3-black">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($receptionrole as $object)
                                    <form method="post" action="/deleterole/{{$object->id}}/Receptionist">
                                        {{ csrf_field() }}
                                        <tr>
                                            <td>{{$object->first}}</td>
                                            <td>{{$object->last}}</td>
                                            <td><input type="submit" value="submit" class="btn btn-success"></td>
                                        </tr>
                                    </form>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity w3-xlarge w3-text-orange "><b>Accountant</b></h5>
                        <hr>
                        <div class="w3-third">
                            <table style="width:800px;" class="w3-table-all w3-centered w3-card" border="1px" >
                                <thead>
                                <tr class="w3-black">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($accountantrole as $object)
                                    <form method="post" action="/deleterole/{{$object->id}}/Accountant">
                                        {{ csrf_field() }}
                                        <tr>
                                            <td>{{$object->first}}</td>
                                            <td>{{$object->last}}</td>
                                            <td><input type="submit" value="submit" class="btn btn-success" ></td>
                                        </tr>
                                    </form>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity  w3-xlarge w3-text-orange "><b>Maintenance</b></h5>
                        <hr>
                        <div class="w3-third">
                            <table style="width:800px;" class="w3-table-all  w3-centered w3-card" border="1px" >
                                <thead>
                                <tr class="w3-black">
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($maintanencerole as $object)
                                    <form method="post" action="/deleterole/{{$object->id}}/Maintanence">
                                        {{ csrf_field() }}
                                        <tr>
                                            <td>{{$object->first}}</td>
                                            <td>{{$object->last}}</td>
                                            <td><input type="submit" value="submit" ></td>
                                        </tr>
                                    </form>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection

