@extends('layouts.layout')
@section('content')
    
@if(Session ::has('msg'))
<span>{{Session::get('msg')}}</span>
@endif

<center><h2>  Welcome to Home</h2></center>
<a href="{{route('logout')}}" style="color:black" class="btn btn-outline-secondary"> logout</a>
@endsection