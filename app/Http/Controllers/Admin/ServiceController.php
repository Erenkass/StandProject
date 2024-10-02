<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::get();
        return view('admin.pages.service.index',compact('services'));
    }

    public function create(){
        return view('admin.pages.service.create');
    }

    public function store(Request $request){

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/icon'),$name);

        }
        else{
            $name = null;
        }

        Service::create(
            [
                'image' => $name,
                'name' => $request->name,
                'content' =>$request->content,
            ]
        );


        return redirect()->route('service.index')->withSuccess('Başarıyla eklendi');
    }

    public function edit($id){
        $service = Service::findOrFail($id);
        return view('admin.pages.service.edit',compact('service'));
    }

    public function update(Request $request,$id){

        $service = Service::findOrFail($id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            Delete($service->image);
            $image->move(public_path('img/icon'),$name);
            $service->image = $name;
        }

        $service->content = $request->content;
        $service->name = $request->name;

        $service->save();

        return back()->withSuccess('Başarıyla Güncellendi');
    }

    public function delete($id){

        $service = Service::findOrFail($id);

        $status = Delete($service->image);

        if($status){
            $service->delete();
            return redirect()->back()->withSuccess('Başarıyla silindi');
        }
        return redirect()->back()->withErrors('Bir hata oluştu');
    }

}
