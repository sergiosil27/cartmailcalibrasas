<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\ContactUs;
use App\Mail\contacto;
use Illuminate\Support\Facades\Mail;


 


class ContactUsController extends Controller{

    
   public function contactUsPost(Request $request){
      
   $content = new contactUs();
   $content->name =   $request->get('name');
   $content->email = $request->get('email');
   $content->message = $request->get('message');

   $content->save();
      

      Mail::to('sergio.sil.27@hotmail.com')->send(new contacto($content));

      return redirect('/nosotros')->with('success', 'Se envio el email correctamente');
   }
}