<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Show the contact form
     * 
     * @return Response
     */
    public function showContactForm()
    {
    	return view('contact');
    }

    
    /**
     * Handle the actual contacting
     * 
     * @param  Request $request
     * @return Response
     */
    public function contact(Request $request)
    {
    	$rules = [
    		'name' => 'required',
    		'email' => 'required|email',
    		'message' => 'required|min:5',
    	];

    	$customMessages = [
    		'name.required' => 'Yo, what should I call you?',
    		'email.required' => 'We need your email address also',
        	'message.required'  => 'c\'mon, you want to contact me without saying anything?',
    	];

    	$this->validate($request, $rules);

    	// send contact details to email address

    	return back()->with("status", "Your message has been received, We'll get back to you shortly.");
    }
}
