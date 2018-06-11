@extends('layouts.app')
@section('content')

<div class="container">
  <h2>All Clients</h2>
             <div class="red">
               @if (Session::has('message'))
                  <p class="session-message">{{Session::get('message')}}</p>
               @endif
             </div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Company</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    	@foreach($clients as $client)
    	
        <tr> 
          <th>{{$client->name}}</th>
          <th>{{$client->email}}</th>
	        <th>{{$client->phone}}</th>
	        <th>{{$client->company}}</th> 
          <th><a href="{{ route('clients.show',['id' => $client->id])}}">Show</a></th>
          <th><a href="{{ route('clients.edit',['id' => $client->id])}}">Edit</a></th>
          <th>
            {!!Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete'])!!}
              {!! Form::submit('Delete') !!}
            {!!Form::close()!!}
          </th>
	      </tr>
      @endforeach
      
    </tbody>
  </table>
  </div>

@endsection
