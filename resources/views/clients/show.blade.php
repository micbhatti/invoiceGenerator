@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Client') }}</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                         
                          <tr><td>Name</td><td>{{$client->name}}</td></tr>
                          <tr><td>Phone</td><td>{{$client->phone}}</td></tr>
                          <tr><td>Company</td><td>{{$client->company}}</td></tr>
                          <tr><td>Email</td><td>{{$client->email}}</td></tr>
                          <tr><td>Street</td><td>{{$client->street}}</td></tr>
                          <tr><td>Suite</td><td>{{$client->suite}}</td></tr>
                          <tr><td>City</td><td>{{$client->city}}</td></tr>
                          <tr><td>Province</td><td>{{$client->province}}</td></tr>
                          <tr><td>Zip</td><td>{{$client->zip}}</td></tr>
                          <tr><td>Country</td><td>{{$client->country}}</td></tr>
                          <tr><td><a href="{{route('clients.edit',['id' => $client->id])}}">Edit Client</a></td></tr>
                        </thead>
                    </table>
                	
                </div>
            </div>
        </div>
    </div>
</div>

@endsection