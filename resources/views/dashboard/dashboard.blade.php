
@include('dashboard.Dashboardcss.dashcss')
@extends('layouts.layout')
@section('content')

    
@if(Session ::has('msg'))
<span>{{Session::get('msg')}} </span>
@endif



<center> <h1>Welcome To Dashboard</h1></center>


<div id="i1">
<div class="c1">


<a href="{{route('home')}}" style="color:black" class="btn btn-outline-secondar"> Home</a>
</div>






<div class="navbar">
<div class="dropdown-container">

<a href="#" style="color:black" class="btn btn dropdown-toggle">About-Us</a>

<div class="dropdown-content">
<a href="{{route('Corporate_Profile')}}" class="btn btn-outline-secondary">Corporate Profile</a>


<a href="{{route('Corporate_Governance')}}" class="btn btn-outline-secondary">Corporate Governance</a>

</div>
</div>
</div>



<div id="navbar1">
<div class="dropdown-container1">

<a href="#" style="color:black" class="btn btn dropdown-toggle"> Our Banking</a>

<div class="dropdown-content1">



<a href="{{route('NRB_Banking')}}" class="btn btn-outline-secondary">NRB Banking</a>
<a href="{{route('Women_Banking')}}" class="btn btn-outline-secondary">Women Banking</a>
<a href="{{route('Digital_Banking')}}" class="btn btn-outline-secondary">Digital Banking</a>
<a href="{{route('Other_Banking')}}" class="btn btn-outline-secondary">Other Banking</a>
<a href="{{route('Deposit_Products')}}" class="btn btn-outline-secondary">Deposit Products (Retail Banking)</a>

</div>
</div>
</div>


<div id="i4">
<a href="{{route('location')}}" style="color:black" class="btn btn dropdown-toggle">Location</a>
</div>

<div id="i5">
<a href="{{route('mediacorner')}}" style="color:black" class="btn btn dropdown-toggle">Mediacorner</a>
</div>

<div id="i6">
<a href="{{route('financialhighlights')}}" style="color:black" class="btn btn dropdown-toggle"> Financial Highlights</a>
</div>

<div id="i7">
<a href="{{route('notice')}}" style="color:black" class="btn btn-outline-secondar">Notice</a>
</div>

<div id="i8">
<a href="{{route('contactus')}}" style="color:black" class="btn btn-outline-secondar">Contact-us</a>
</div>

<div id="i9">
<a href="{{route('career')}}" style="color:black" class="btn btn-outline-secondar">Career</a>

</div>
</div>


<div id='i10'>
<a href="{{route('logout')}}" style="color:black" class="btn btn-outline-secondary"> logout</a>
</div>

@endsection