<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Logo;

use App\Models\materials;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->usertype;
        $data = logo::all();

        if($usertype == '1'){
            return redirect('homepage');
        }else{
            return view('User.home', compact('data'));
        }
    }


    public function index(){

        $data = logo::all();

        if(Auth::id()){
            return redirect('redirect');
        }else{
              return view('User.home', compact('data'));
        }

      

    }


    public function show_materials(){

        $user = auth()->user();

        $dataa = logo::all();

        $data = materials::where('level_id', $user->level_id)->orwhere('level_id', $user->level_id-1)->orwhere('level_id', $user->level_id-2)->orwhere('level_id', $user->level_id-3)->orderBy('title', 'DESC')->get();


        return view('user.show_materials', compact('data', 'dataa'));
    }


    public function user_view_material($id){
        $data = materials::find($id);
        $dataa = logo::all();
        return view('user.user_view_material', compact('data', 'dataa'));
    }
}
