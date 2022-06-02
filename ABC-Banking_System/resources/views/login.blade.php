
@extends('layouts.layout')
@section('content')


@if(Session ::has('msg'))
<span>{{Session::get('msg')}}</span>
@endif

<center>

<form action="{{route('logsubmit')}}"  method="post"  >
  {{@csrf_field()}}

<h1> <u>Login Here</u></h1>
<b>UserID:  <input type='text' name="userid" value="{{old('userid')}}"   placeholder='Enter Your Account Number'> 
    @error('userid')

<span>{{$message}} </span>

 @enderror
</br></br>
 Password:<input type="password"  name="password" id="password"  value="" placeholder="Enter password">

@error('userid')



<span>{{$message}} </span>

@enderror
</br>
<a href="{{ route('registration')}}"> Register Here</a></br>
<input type= "submit" style="color:black" class="btn btn-outline-secondary" value='Submit' >

</center>

</div>

</form>

    @endsection