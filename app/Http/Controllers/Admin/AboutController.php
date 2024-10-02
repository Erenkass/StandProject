<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::get();
        return view('admin.pages.about.index',compact('abouts'));
    }

    public function create(){
        return view('admin.pages.about.create');
    }

    public function store(Request $request){

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/about'),$name);

        }
        else{
            $name = null;
        }

        About::create(
            [
                'name' => $request->name,
                'content' =>$request->content,
                'image' => $name ?? NULL,
            ]
        );


        return redirect()->route('about.index')->withSuccess('Başarıyla eklendi');
    }

    public function edit($id){
        $about = About::findOrFail($id);
        return view('admin.pages.about.edit',compact('about'));
    }

    public function update(Request $request,$id){

        $about = About::findOrFail($id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            Delete($about->image);
            $image->move(public_path('img/about'),$name);
            $about->image = $name ;
        }

        $about->name = $request->name;
        $about->content =$request->content;

        $about->save();

        return back()->withSuccess('Başarıyla Güncellendi');
    }

    public function delete($id){

        $about = About::findOrFail($id);

        $status = Delete($about->image);

        if($status){
            $about->delete();
            return redirect()->back()->withSuccess('Başarıyla silindi');
        }
        return redirect()->back()->withErrors('Bir hata oluştu');
    }
}
