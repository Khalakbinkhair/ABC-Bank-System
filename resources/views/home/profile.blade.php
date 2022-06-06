@extends('layouts.layout')
@section('content')



<table class='table table-bordered'>

<center>
     
<tr>
                         <td colspan="2" align="left"  ><b><h3>Welcome to Your Profile</h3></b>
                         </td>
                        




                        </tr>
                         <tr>  
                           <td width="50px" > <h5>   Name :  {{$info->name}}</h5> </td> 
                          <td width="40%" height="60%"  rowspan="2"><img src="{{'/images/'.($info->file)}}" height="200px" width="220px"></a>
                                           
                        </td>
                </tr>
                <tr>  <td colspan="2">  <h5>    User ID  :   {{$info->userid}}</h5>  </td> </tr>
               <tr>  <td   colspan="2">     Email  : {{$info->email}} </td> </tr>
              <tr>   <td  colspan="2">     Gender  : {{$info->gender}} </td> </tr>   

              
              <tr>   <td  colspan="2">    Blood Group  : {{$info->blood}} </td> </tr>

              <tr>   <td  colspan="2">    User-type : {{$info->usertype}} </td> </tr>            
              
               <tr>  <td colspan="2" >     Address  :   {{$info->address}}       </td> </tr>
                      </center>

    
</table>


@endsection