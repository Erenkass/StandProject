<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        return view('admin.pages.slider.index',compact('sliders'));
    }

    public function create(){
        return view('admin.pages.slider.create');
    }

    public function store(Request $request){

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img/slider'),$name);

        }
        else{
            $name = null;
        }

        Slider::create(
            [
                'name' => $request->name,
                'content' =>$request->content,
                'status' => $request->status,
                'image' => $name ?? NULL,
            ]
        );


        return redirect()->route('slider.index')->withSuccess('Başarıyla eklendi');
    }

    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view('admin.pages.slider.edit',compact('slider'));
    }

    public function update(Request $request,$id){

        $slider = Slider::findOrFail($id);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            Delete($slider->image);
            $image->move(public_path('img/slider'),$name);
            $slider->image = $name ;
        }

        $slider->content = $request->content;
        $slider->name = $request->name;
        $slider->status = $request->status;

        $slider->save();

        return back()->withSuccess('Başarıyla Güncellendi');
    }

    public function delete($id){

        $slider = Slider::findOrFail($id);

        $status = Delete($slider->image);

        if($status){
            $slider->delete();
            return redirect()->back()->withSuccess('Başarıyla silindi');
        }
        return redirect()->back()->withErrors('Bir hata oluştu');
    }

    public function status(Request $request){

        $id = $request->id;
        $slider = Slider::findOrFail($id);

        $slider->update([
            'status'=>$request->status,
        ]);

        $sliderStatus = $slider->status == '1' ? true : false;

        return response(['status'=>$sliderStatus]);

    }
}
