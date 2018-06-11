<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\invoicemakers;
use Session;
class InvoicemakersController extends Controller
{
    
    public function index() {
        $makers = invoicemakers::all();

        return view('makers.view',compact('makers'));
    }
    public function create(){
    	return view('makers.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate(
                          [ 'name' => 'required|string|max:255',
                            'email' => 'required|string|email|max:255|unique:invoicemakers',
                            'street' => 'required|string|min:6',
                            'city' => 'required|string|min:2',
                            'province' => 'required|string|min:2',
                            'zip' => 'required|string|min:2',
                            'country' => 'required|string|min:2',]);
    	$maker = new invoicemakers;
    	$maker->name = $request->name;
    	$maker->email = $request->email;
    	$maker->street = $request->street;
    	$maker->phone = $request->phone;
    	$maker->suite = $request->suite;
    	$maker->city = $request->city;
    	$maker->province = $request->province;
    	$maker->zip = $request->zip;
    	$maker->country = $request->country;
    	$maker->save();	
        return redirect()->route('allaccounts');

    }

    public function show($id) {
        $maker = invoicemakers::find($id);
        return view('makers.update',compact('maker'));
    }

    public function update($id,Request $request) {
        
        $maker = invoicemakers::find($id);
        $maker->name = $request->name;
        $maker->email = $request->email;
        $maker->street = $request->street;
        $maker->phone = $request->phone;
        $maker->suite = $request->suite;
        $maker->city = $request->city;
        $maker->province = $request->province;
        $maker->zip = $request->zip;
        $maker->country = $request->country;
        $maker->save(); 
        Session::flash('message', 'Successfully Updated');
        return view('makers.update',compact('maker'));
    }

    public function delete($id) {
        $maker =  invoicemakers::find($id);
        $maker->delete();
        Session::flash('message','Successfully Deleted');
        return redirect()->route('allaccounts');
    }
}
