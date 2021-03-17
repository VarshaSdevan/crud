<!----
@Update page
@author:Varsha S
@date:17/03/2021
--->
<form action="{{url('/update')}}" method="post">
@csrf
<input type="hidden" name="id" id="group" value="{{$data->id}}">
Name:<input type="text" name="firstname" value="{{$data->firstname}}"></br></br>
Lastname:<input type="text" name="lastname" value="{{$data->lastname}}"></br></br>
Age:<input type="text" name="age"value="{{$data->age}}"></br></br>
Gender:<input type="text" name="gender" value="{{$data->gender}}"></br></br>
Address:<input type="text" name="address" value="{{$data->address}}"></br></br>
Phone:<input type="text" name="phone"value="{{$data->phone}}"></br></br>
Email:<input type="text" name="email"value="{{$data->email}}"></br></br>
<input type="submit" name="btn" value="update">


</form>