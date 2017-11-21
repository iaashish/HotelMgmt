@extends('layouts.managerheader')
@section('content')
    <script>
//        $(document).on('change','#role',function(){
//            alert('Change Happened');
//        });
//        $("#role").change(function(e) {
        //            e.preventDefault();
        //            console.log("aa");
        //            $y = $(this).val();
        //            alert($y);
        //        });
    </script>
    <form method="POST" action="/setroles">
        {{ csrf_field() }}
        <select title="Select Type" class="form-control" id="role"name="role">
            <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                Choose Role Type
            </option>
            @foreach ($role as $object )
                <option value="{{$object->id}}">{{$object->name}}</option>
            @endforeach
        </select>
        <select title="Select Type" class="form-control" name="item_id" id="staffroles">
            <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                Choose Staff Type
            </option>
            {{--@foreach ($staff as $object )--}}
                {{--<option value="{{$object->id}}">{{$object->first.' '.$object->last}}</option>--}}
            {{--@endforeach--}}
        </select>
        <input type="submit" value="assign">
    </form>
@endsection