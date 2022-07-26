

 @extends('layouts.app')
@section('content')

<div class"already" >
<h1 style="text-align:"center">@php echo session()->get('user')@endphp's profile</h1> 
<hr>
<div style="background-color: aquamarine"> 
<h1>{{session('error')}}  </h1>
</div>
<hr>
</div>  

<table class="table table-border">

    <tr>
        <th>
             Username
        </th>
        <td>
            {{ $Delivery->name}}
        </td>
    </tr>

    <tr>
        <th>
        Fullname
        </th>
        <td>
            {{$Delivery->fullname}}
        </td>
    </tr>
    <tr>
        <th>
               Email-Address
        </th>
        <td>
            {{$Delivery->email }}
        </td>
    </tr>

    <tr>
        <th>
               Date of Birth
        </th>
        <td>
            {{$Delivery->dob }}
        </td>
    </tr>

    <tr>
        <th>
               Phone Number
        </th>
        <td>
            {{$Delivery->number}}
        </td>
    </tr>
</table>
<a class="btn btn-info" href="{{route('editprofile')}}"> Edit-Profile</a>
@endsection 