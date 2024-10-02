<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;


class WorkController extends Controller
{
    public function index(){
        $works = Work::get();
        return view('admin.pages.work.index',compact('works'));
    }

    public function create(){
        return view('admin.pages.work.create');
    }

    public function store(Request $request){
            $images = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $name = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('img/work'), $name);
                    $images[] = $name;
                }
            }

            foreach ($images as $name) {
                Work::create([
                    'image' => $name,
                ]);
            }

        return redirect()->route('work.index')->withSuccess('Başarıyla eklendi');
    }

    public function edit($id){
        $work = Work::findOrFail($id);
        return view('admin.pages.work.edit',compact('work'));
    }

    public function update(Request $request,$id){

        $work = Work::findOrFail($id);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            Delete($work->image);
            $image->move(public_path('img/work'),$name);
            $work->image = $name;

        }

        $work->save();

        return back()->withSuccess('Başarıyla Güncellendi');
    }

    public function delete($id){

        $work = Work::findOrFail($id);

        $status = Delete($work->image);

        if($status){
            $work->delete();
            return redirect()->back()->withSuccess('Başarıyla silindi');
        }

        return redirect()->back()->withErrors('Bir hata oluştu');
    }


}
