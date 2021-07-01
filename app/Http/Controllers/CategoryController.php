<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function all(){
        $categories = Category::withCount("Campaigns")->paginate(10);
//        dd($categories);
        return view("category.list",[
            "categories"=>$categories
        ]);
    }

    public function form(){
        return view("category.form");
    }

    public function save(Request $request){
        $n = $request->get("name");
        Category::create([
            "name"=>$n
        ]);
        return redirect()->to("admin/categories");
    }

    public function edit($id){
        $cat = Category::findOrFail($id);
        return view("category.edit",[
            "cat"=>$cat
        ]);
    }

    public function update(Request $request,$id){
        $cat = Category::findOrFail($id);
        $cat->update([
            "name"=>$request->get("name")
        ]);
        return redirect()->to("admin/categories");
    }

    public function delete($id){
        $cat = Category::findOrFail($id);
        $cat->delete();
        return redirect()->to("admin/categories");
    }
}

