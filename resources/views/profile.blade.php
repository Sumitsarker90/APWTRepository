
@extends('layouts.app')
@section('content')


<h1>Welcome to Your Profile,   </h1>
<br>
<h2>{{$name}}</h2>
<br>
<h2>{{$dob}}</h2>
<br>
<h2>{{$id}}</h2>
<br>
<ul>
@foreach($names as $n)
<li>
    {{$n}}
</li>
@endforeach
</ul>


@endsection