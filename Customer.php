<?php

namespace App;
use App\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
      
 protected $fillable = array('id','name', 'email', 'address','contact_number','service'); 
 
  public static $rules = array(
        'name'             => 'required',                        // just a normal required validation
        'email'            => 'required|email',  
		 'address'            => 'required',
		  'contact_number'      => 'required',  
		   'service'             => 'required',         // required and must be unique
        
                   // required 
    );

  
}
