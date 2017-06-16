<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;




class CustomersController extends Controller
{
    public function regd(Request $request)
    {

// create the data for our app
        $data = new Customer;
        $data->name =  $request->get('firstname');
        $data->email = $request->get('email');
		$data->address = $request->get('address');
		 $data->contact_number =  $request->get('contact_number');
		  $data->service =  $request->get('service');
       
        // save 
        $data->save();
      
        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        
		return \View::make('test');

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      }
	  
	   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
