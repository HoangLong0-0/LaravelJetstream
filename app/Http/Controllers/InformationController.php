<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function all(Request  $request){
        $informations = Information::all();
        return view("information.list",[
            "informations"=>$informations
        ]);
    }

    public function form(){
        return view("information.form");
    }

    public function save(Request $request){
        $request->validate([
            "name"=>"required",
        ],[
            "name.required"=>"req name",
        ]);
        // upload file image
        $image = null;
        if($request->has("image")){
            $file = $request->file("image");
            $extName = $file->getClientOriginalExtension();// lay duoi file
            $fileName = time().".".$extName;
            $fileSize = $file->getSize();
            $allow = ["png","jpg","jpeg","gif"];
            if(in_array($extName,$allow)){
                if($fileSize < 10000000){
                    try {
                        $file->move("upload",$fileName); // up file len host
                        $image = $fileName;
                    }catch (\Exception $e){}

                }
            }
        }

        try {
            Information::create([
                "name"=>$request->get("name"),
                "image"=>$image,
                "description"=>$request->get("description")
            ]);
        }catch (\Exception $e){
            abort(404);
        }
        return redirect()->to("admin/informations");
    }

    public function edit($id){
        $in = Information::findOrFail($id);
        return view("information.edit",[
            "in"=>$in
        ]);
    }

    public function update(Request $request,$id){
        $in = Information::findOrFail($id);
        $request->validate([
            "name"=>"required"
        ],[
            "name.required"=>"name req"
        ]);
        $image = null;
        if($request->has("image")){
            $file = $request->file("image");
            $extName = $file->getClientOriginalExtension();// lay duoi file
            $fileName = time().".".$extName;
            $fileSize = $file->getSize();
            $allow = ["png","jpg","jpeg","gif"];
            if(in_array($extName,$allow)){
                if($fileSize < 10000000){
                    try {
                        $file->move("upload",$fileName); // up file len host
                        $image = $fileName;
                    }catch (\Exception $e){}

                }
            }
        }

        try {
            $in->update([
                "name"=>$request->get("name"),
                "image"=>$image,
                "description"=>$request->get("description")
            ]);
        }catch (\Exception $e){
            abort(404);
        }
        return redirect()->to("admin/informations");
    }
}
