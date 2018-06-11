@extends('layouts.app')
@section('content')

<div class="container">
  <h2>All Accounts</h2>
             <div class="red">
               @if (Session::has('message'))
                  <p>{{Session::get('message')}}</p>
               @endif
             </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($makers as $maker)
    	
        <tr> 
	        <th>{{$maker->name}}</th>
	        <th>{{$maker->email}}</th> 
          <th><a href="{{ route('singleAcc',['id' => $maker->id])}}">Edit</a></th>
          <th><a href="{{ route('DelAcc',['id' => $maker->id])}}">Delete</a></th>
	      </tr>
     
    	
    	@endforeach
      
    </tbody>
  </table>
  </div>

@endsection
