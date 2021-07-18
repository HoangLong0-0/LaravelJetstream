<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function home(){
        $informations = Information::all();
        $campaigns = Campaign::with("Category")
            ->get();
        return view('themes.index2',[
            "informations"=>$informations,
            "campaigns"=>$campaigns
        ]);
    }

    public  function information_detail($id){
        $in = Information::findOrFail($id);
        return view("themes.information",[
            "in"=>$in
        ]);
    }

    public function list_information(){
        $ins = Information::all();
        return view("themes.list_information",[
            "ins"=>$ins
        ]);
    }

    public function list_campaign(){
        $cmps = Campaign::with("Category") ->get();
        return view("themes.list_campaign",[
            "cmps"=>$cmps
        ]);
    }

    public  function campaign_detail($id){
        $cmp = Campaign::findOrFail($id);
        return view("themes.campaign",[
            "cmp"=>$cmp
        ]);
    }

    public  function campaign_register($id){
        $user_id = Auth::id();
//        $user = User::with('campaigns')->findOrFail($id)->get();
        $user = User::with('campaigns')->findOrFail($user_id);
//        dd($user);
        foreach ($user->campaigns as $item){
            $item_id = $item->id;
            if($item_id == $id){
                return view("themes.error_registered",[
                ]);
            }
        }

        $user->campaigns()->attach([$id]);
        $cmps = Campaign::with("Category") ->get();
        return view("themes.list_campaign",[
            "cmps"=>$cmps
        ]);
    }

    public function management(){
        $id = Auth::id();
        $user = User::with('campaigns')->findOrFail($id);
        return view("themes.management",[
            "user"=>$user
        ]);
    }

    public function management_delete($id){
        $user_id = Auth::id();
        $user = User::with('campaigns')->findOrFail($user_id);
        $user->campaigns()->detach([$id]);
        return view("themes.management",[
            "user"=>$user
        ]);
    }

    public function aboutUs(){
        return view("about-us");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/user');
    }
}
