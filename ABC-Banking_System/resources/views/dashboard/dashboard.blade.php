
@include('dashboard.Dashboardcss.dashcss')
@extends('layouts.layout')
@section('content')

    
@if(Session ::has('msg'))
<span>{{Session::get('msg')}}</span>
@endif






<div id="i1">
<div class="c1">

<center><h2> Welcome to Home</h2></center>


</div>
</div>


<div id='i2'>
<a href="{{route('logout')}}" style="color:black" class="btn btn-outline-secondary"> logout</a>
</div>

@endsection