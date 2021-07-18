<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CampaignController extends Controller
{
    public function all(Request  $request){
        $campaigns = Campaign::with("Category")
            ->get();
        return view("campaign.list",[
            "campaigns"=>$campaigns
        ]);
    }

    public function form(){
        $categories = Category::all();
        return view("campaign.form",[
            "categories"=>$categories
        ]);
    }

    public function save(Request $request){
        $request->validate([
            "name"=>"required",
            "category_id"=>"required|numeric|min:1",
        ],[
            "name.required"=>"req name",
            "category_id.min"=>"req cate_id",
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
            Campaign::create([
                "name"=>$request->get("name"),
                "image"=>$image,
                "description"=>$request->get("description"),
                "category_id"=>$request->get("category_id"),
            ]);
        }catch (\Exception $e){
            abort(404);
        }
        return redirect()->to("admin/campaigns");
    }

    public function edit($id){
        $categories = Category::all();
        $cp = Campaign::findOrFail($id);
        return view("campaign.edit",[
            "cp"=>$cp,
            "categories"=>$categories
        ]);
    }

    public function update(Request $request,$id){
        $cp = Campaign::findOrFail($id);
//            dd($pr);
        $request->validate([
            "name"=>"required",
            "category_id"=>"required|numeric|min:1",
        ],[
            "name.required"=>"name req",
            "category_id.min"=>"cate_id req",
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
            $cp->update([
                "name"=>$request->get("name"),
                "image"=>$image,
                "description"=>$request->get("description"),
                "category_id"=>$request->get("category_id"),
            ]);
        }catch (\Exception $e){
            abort(404);
        }
        return redirect()->to("admin/campaigns");
    }

    public  function delete($id){
        $cp = Campaign::findOrFail($id);
        $cp->delete();
    }

    public function addToCart($id){
        $campaign = Campaign::findOrFail($id);
        $cart = [];// mảng giỏ hàng
        if(Session::has("cart")){ // nếu có giỏ hàng rồi
            $cart = Session::get("cart");// $_SESSION["cart"]
        }
        if(!$this->checkCart($cart,$campaign)){// sp chua co trong gio hang
            $campaign->cart_qty = 1;//them 1 thuoc tinh ngoai le de bieu thi so luong sp trong gio hang
            $cart[] = $campaign;
        }else{
            for($i=0;$i<count($cart);$i++){
                if($cart[$i]->id == $campaign->id){
                    $cart[$i]->cart_qty = $cart[$i]->cart_qty+1;
                }
            }
        }
        Session::put("cart",$cart);
        return redirect()->to("cart");
    }

    // tim kiem xem sp da co trong gio hang hay chua
    private function checkCart($cart,$p){
        foreach ($cart as $item){
            if($item->id == $p->id){
                return true;
            }
        }
        return false;
    }

    public function cart(){
        $cart = [];// mảng giỏ hàng
        if(session()->has("cart")){ // nếu có giỏ hàng rồi
            $cart = session("cart");// $_SESSION["cart"]
        }
        dd($cart);
    }

    public function checkout(){
        $cart = [];// mảng giỏ hàng
        if(session()->has("cart")){ // nếu có giỏ hàng rồi
            $cart = session("cart");// $_SESSION["cart"]
        }
        if(count($cart)){
            return view("checkout",["cart"=>$cart]);
        }
        return redirect()->to("cart");
    }
}
