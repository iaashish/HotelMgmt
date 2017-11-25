<!doctype html>
<html lang="{{ app()->getLocale() }}">
 
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hotel Project CSCE 553</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     
     
     

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>




input {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid white;
    border-radius: 12px;
    background: white;
    text-decoration: none;
    cursor: pointer;
    text-decoration: none;

   
}


.button {
    color: black;
    font-family: 'tahoma';
    font-size: 14px; 
  font-weight: bold;

}

input[type="date"]::-webkit-clear-button {
    font-size: 18px;
    height: 30px;
    position: relative;

  }
 input[type="date"]::-webkit-inner-spin-button {
    height: 28px;
  }

  input[type="date"]::-webkit-calendar-picker-indicator{
    font-size: 15px;


   }

body {font-family: "Lato", sans-serif}
</style>
<body>

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
     <!-- Left Column -->
     <br>
     <br>
     <br> 
    </p></div>
     <div class="w3-third w3-center">
         
     
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
        <br>
        <select title="Select Type" class="form-control" name="item_id" id="staffroles">
            <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                Choose Staff Type
            </option>
            {{--@foreach ($staff as $object )--}}
                {{--<option value="{{$object->id}}">{{$object->first.' '.$object->last}}</option>--}}
            {{--@endforeach--}}
        </select>
        <br>
        
        <input type="submit" value="Assign" class=button>
    </form>
</div>
                <!-- End Left Column -->

                <div class="w3-rest w3-center">

                <input type="date" value="From" name="from" placeholder="From" required=""/>

      
     
                    </div>
                    
@endsection

</body>
</html>