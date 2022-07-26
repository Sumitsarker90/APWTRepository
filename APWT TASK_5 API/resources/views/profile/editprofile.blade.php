@extends('layouts.app')
@section('content')

<div class"already" >
<h1 style="text-align:"center">@php echo session()->get('user')@endphp's profile</h1>  
<h1>{{session('error')}}  
</div>  



	<div class="form">
		<form name="reg" action="{{route('editprofile')}}" onsubmit="return validateForm()" method="POST">

        {{csrf_field()}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<input class="form-control" type="text" name="id" value="{{$Delivery->id}}" readonly >

		<b>Username:  </b><input class="form-control" type="text" name="name" value="{{$Delivery->name}}"  >
		<br>
        <b>Number:  </b><input class="form-control" type="text" name="number" value="{{$Delivery->number}}" >
		<br>
		<b>Password: </b><input class="form-control" type="text" name="password" value="{{$Delivery->password}} " >
		<br>
		<b>Full Name:  </b><input class="form-control" type="text" name="fullname" value="{{$Delivery->fullname}}"  >
		<br>
		{{-- <b>Choose your Gender : </b>
		<input type="radio" name="gender" value="Male"value="{{$Delivery->gender}}"readonly  >
		Male
		<input type="radio" name="gender" value="Female" value="{{$Delivery->gender}}"readonly >
		Female
		<input type="radio" name="gender" value="other" value="{{$Delivery->gender}}"readonly>
		Other --}}

		<b>Email:  </b><input class="form-control" type="email" name ="email" value="{{$Delivery->email}}" >
		<br>
        <b>Date of birth:  </b><input class="form-control" type="text" name = "dob" value="{{$Delivery->dob}} ">
		<br>
		<br>
		</p>
		<br>
        <input class="btn btn-success" type="submit" value="Update">
		</form>

</div>
		<br><br>
    @endsection
