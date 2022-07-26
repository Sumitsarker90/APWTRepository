@extends('layouts.app')
@section('content')

<h1>{{session('error')}}</h1>

<br>
<br>
<br>

<div>

	<div class="container" >
	<div class="row">
	<div class="col-sm-5"
    style=" border: 3px solid #73AD21;">
				
		<div class="form" >
			<h1> <i>User Login </i></h1>
	<legend>
            <form name="login" action="{{route('login')}}" onsubmit="return validateForm()" method="POST">
     
            {{csrf_field()}}

@if ($errors->any())
<div class="alert alert-warning" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

		<b>Email:  </b><input class="form-control" type="email" name="email" placeholder="email" >
		<br>
		<b>Password:  </b><input class="form-control" type="password" name="password" placeholder="Password" >
	</p>

   
    <br>
	 
			<input class="btn btn-primary" type="submit" name="submit" value="Sign In"> <input class="btn btn-primary" type="reset" name="reset"> <br> <br>
    </form>
    </legend>

    <b> Not Registered ? Click here </b> <a class="btn btn-primary" href="{{route('registration')}}">Sign-Up</a>

    </div>
	</div>
	</div>
</div>


@endsection