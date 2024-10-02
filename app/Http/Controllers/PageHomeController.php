<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Work;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function index(){
        $slider = Slider::where('status','1')->first();
        $contact = Contact::where('id',1)->first();
        $services = Service::get();
        $works = Work::get();
        $abouts = About::get();
        return view("frontend.index",compact('slider','contact','services','works','abouts'));
    }
}
