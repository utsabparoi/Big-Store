<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
    	$weburl=[
    		'google'	=> 'https://www.google.com',
    		'facebook'	=> 'https://www.facebook.com',
			'youtube' 	=> 'https://www.youtube.com'
    	];
    	$description='Please visit the followin url';
    	// return view('about_us',[
    	// 	'weburl'=>$weburl,
    	// 	'desc'	=>$description
    	// ]);

    	return view('about_us',compact('weburl','description'));
    }

}
