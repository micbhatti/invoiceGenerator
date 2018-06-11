<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clients;
use Session;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = clients::all();
        return view('clients.all',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'company' =>'string',
            'street' => 'required|string|min:6',
            'city' => 'required|string|min:2',
            'province' => 'required|string|min:2',
            'zip' => 'required|string|min:2',
            'country' => 'required|string|min:2',
        ]);
       
            $client = new clients();
            $client->name = $request->name;
            $client->company = $request->company;
            $client->email = $request->email;
            $client->street = $request->street;
            $client->phone = $request->phone;
            $client->suite = $request->suite;
            $client->city = $request->city;
            $client->province = $request->province;
            $client->zip = $request->zip;
            $client->country = $request->country;
            $client->save();
            return redirect()->route('clients.index');
         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $client = clients::find($id);
       return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = clients::find($id);
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = clients::find($id);
        $client->name = $request->name;
        $client->company = $request->company;
        $client->email = $request->email;
        $client->street = $request->street;
        $client->phone = $request->phone;
        $client->suite = $request->suite;
        $client->city = $request->city;
        $client->province = $request->province;
        $client->zip = $request->zip;
        $client->country = $request->country;
        $client->save();
        Session::flash('message','Successfully Updated');
        return redirect()->route('clients.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $client =  clients::find($id);
       $client->delete();
       Session::flash('message','Succesfully Deleted');
       return redirect()->route('clients.index');
    }
}
