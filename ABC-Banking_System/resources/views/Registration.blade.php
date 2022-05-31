@extends('layouts.layout')
@section('content')



<form action="{{route('regsubmit')}}"  method="post" enctype="multipart/form-data" >
  {{@csrf_field()}}

<div><center><h1><b><u>Welcome To ABC Banking System</u><b></h1></center></div>
<center>

<b>Full Name:<input type='text' name='name' value="{{old('name')}}" placeholder="Enter Your Full Name"></br></br>

@error('name')

<span>{{$message}} </span>

 @enderror
 <b>Account-Number:<input type='text' name='userid' value="{{old('userid')}}" placeholder="Enter Your Account Number"></br></br>

 <b>Email:<input type='email' name='email' value="{{old('email')}}" placeholder="Enter Your Email"> </br></br>

 @error('email')

<span>{{$message}} </span>

 @enderror

 <b>Address:<input type='text' name='address' value="{{old('text')}}" placeholder="Enter Your Address"> </br></br>
 Gender:
        <input type="radio"  name="gender" id="Male" value="Male"><b>Male
        <input type="radio"  name="gender" id="Female" value="Female">Female
        <input type="radio"  name="gender" id="Other" value="Other">Other</b>
</br></br>
<b>Password:<input type='password' name='password' id="password"   placeholder="Enter password"></br></br>

<b>Confrim-Password:<input type='password' name='cpassword' id="cpassword"   placeholder="Enter Confirm password"></br></br>

<b>Blood Group:<select name="blood">
                              <option value="A+"> A+</option>
                              <option  value="B+"> B+</option>
                              <option value="O+"> O+</option>
                              <option value="AB+"> AB+</br></br></b></option>
</select>
                         
                             
                              </br></br>Upload picture:<input type="file" name="file" id="file" value="">
</br></br> 
User Type:
                                <input type="radio" name="usertype" id="Savings " value="Savings"><b>Savings</b>
                                <input type="radio" name="usertype" id="Current " value="Current "><b>Current </b>
                                <input type="radio" name="usertype" id="Fixed Deposite " value="Fixed Deposite"><b>Fixed Deposite</b>
                                <input type="radio" name="usertype" id="Islamic"  value="Islamic"><b>Islamic</b>


</br></br>
Opening Date: <input type='date' name='date' value='' > </br></br>

 <input type= "submit"  style="color:black" class="btn btn-outline-secondary" value='Submit' >


Already Register?
<a href="login"> Login Here</a>
</center>
</form>
@endsection