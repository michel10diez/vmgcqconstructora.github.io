<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoEmail;

class PostsController extends Controller
{
    public function index(){
    	return view('welcome');
    }

    public function showProjects(){
    	return view('posts/projects');
    }
    public function secondProject(){
    	return view('posts/projects-uno');
    }
    public function contact(){
    	return view('contact');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required'
        ]);

        Mail::send('emails.contact-message', [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->mensaje
        ],function ($mail) use($request){
            $mail->from($request->email, $request->name);
            $mail->to('michel10diez@gmail.com')->subject('Mensaje Contacto de sitio');
        });

        return redirect()->back()->with('flash_message', 'Gracias por tu mensaje.');
    }
    public function ejemplo(){
        return view('posts/ejemplo');
    }
}
