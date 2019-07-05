<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
    	return view('contacts.contact');
    }

    public function store(ContactRequest $request){
    	//dd($request->only('name','email','message'));
    	$message= Message::create($request->only('name','email','message'));
    	Mail::to(config('laracarte.admin_email'))->send(new ContactMessageCreated($message));
    	flashy()->success('You have been logged out.', 'http://your-awesome-link.com');
    	return redirect()->route('home');
    }
}
