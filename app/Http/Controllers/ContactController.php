<?php

namespace App\Http\Controllers;

use App\Mail\ContactoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        $correo = new ContactoMailable($request->all());
        Mail::to('miguel.terrazas@softkitect.com')->send($correo);
        
        return redirect()->route('contact.index')->with('info', 'Mensaje enviado');
    }
}
