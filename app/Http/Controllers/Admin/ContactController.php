<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::where('id',1)->first();
        return view('admin.pages.contact.edit',compact('contact'));
    }

    public function update(Request $request,$id = 1){

        Contact::updateOrCreate(
            ['id' => $id],
            [
                'email' =>$request->email,
                'telephone' => $request->telephone,
                'whatsapp' => $request->whatsapp,
                'address' => $request->address,
                'about' => $request->about,
            ]
        );
         return back()->withSuccess('Başarıyla Güncellendi');
    }
}
