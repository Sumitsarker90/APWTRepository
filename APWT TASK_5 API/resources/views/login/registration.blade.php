@extends('layouts.app')
@section('content')


<h1>{{session('error')}}</h1>

<div>

	<div class="container">
	<div class="row">
	<div class="col-sm-5">
		<h1>Registration Form</h1>
        
        <p style="text-align: right";>
		<div class="already" >
			<h2> <br> Already Registered ?<br> <a class="btn btn-primary" href="{{route('login')}}">Sign-In here</a> </h2>
		</div>
        </p>
	<div class="form">
		<form name="reg" action="{{route('registration')}}" onsubmit="return validateForm()" method="POST">

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

		<b>Username:  </b><input class="form-control" type="text" name="username" placeholder="User name" >
		<br>
        <b>Number:  </b><input class="form-control" type="text" name="number" placeholder="Phone Number" >
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="password" placeholder="Password"  >
		<br>
		<b>Full Name:  </b><input class="form-control" type="text" name="name" placeholder="Full name"  >
		<br>
		<b>Choose your Gender : </b>
		<input type="radio" name="gender" value="Male"  >
		Male
		<input type="radio" name="gender" value="Female" >
		Female
		<input type="radio" name="gender" value="other" >
		Other
		<br><br>
		<b>Email:  </b><input class="form-control" type="email" name ="email" placeholder="E-mail">
		<br>
        <b>Date of birth:  </b><input class="form-control" type="date" name = "dob"  >
		<br>
		<br>
		</p>
		<br>
		<input class="btn btn-primary" type="submit" name="submit" value="Sign Up"> <input class="btn btn-primary" type="reset" name="reset">
		</form>
	</div>
	</div>
	</div>
	</div>

</div>
		<br><br>
		
        @endsection
