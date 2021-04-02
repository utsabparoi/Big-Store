<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactInfo;

class ContactInfoController extends Controller
{
    public function submitContact(Request $request) {
    	//dd($request->all());
    	$contact_data = $request->all();
    	$contact_info = new ContactInfo();

    	$contact_info->name = $contact_data['user_name'];
		$contact_info->email = $contact_data['user_email'];
		$contact_info->contact_number = $contact_data['user_contact'];
		$contact_info->message = $contact_data['user_message'];

		$contact_info->save();
		
		return redirect('/');
    }
}
