<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\Level;

use App\Models\User;

use App\Models\Logo;

use App\Models\materials;

use Illuminate\Support\Facades\Stroage;

class AdminController extends Controller
{
     public function levels(){
        return view("admin.add_levels");
    }


    public function students(){
        $data = level::all();
        return view("admin.add_students", compact('data'));
    }


    public function materials(){
        $data = level::all();
        return view("admin.add_materials", compact('data'));
    }


    public function logo(){
        return view("admin.add_logo");
    }


  
         public function upload_logo(Request $request){

        $logo = new Logo;

        
        $image = $request->file;

        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('logoimage', $imagename);

        $logo->image = $imagename;

     
        $logo->save();

        return redirect()->back()->with('message', 'Logo has been added successfully');
    
    }




    public function upload_levels(Request $request){

        $levels = new Level;


        $levels->level_id = $request->level_id;

        $levels->level_name = $request->level_name;


        $levels->save();

        return redirect()->back()->with('message', 'Level added successfully');
    }


    public function upload_students(Request $request){

        $user = new User;


        $user->matric = $request->matric;

        $user->name = $request->name;

        $user->email = $request->email;

        $user->phone = $request->phone;

        $user->address = $request->address;

        $user->password = Hash::make($request->password);

        $user->level_id = $request->level_id;

 

        $user->save();

        return redirect()->back()->with('message', 'Student added successfully');
    }
    

    public function homepage(){
        $count_all_hundred_level_students = user::where('level_id', '1')->count();
        $count_all_two_hundred_level_students = user::where('level_id', '2')->count();
        $count_all_three_hundred_level_students = user::where('level_id', '3')->count();
        $count_all_four_hundred_level_students = user::where('level_id', '4')->count();
        $count_all_students = user::all()->where('level_id', !0)->count();

        $count_all_hundred_level_materials = materials::where('level_id', '1')->count();
        $count_all_two_hundred_level_materials = materials::where('level_id', '2')->count();
        $count_all_three_hundred_level_materials = materials::where('level_id', '3')->count();
        $count_all_four_hundred_level_materials = materials::where('level_id', '4')->count();
        $count_all_materials = materials::all()->count();

        return view("admin.home",compact('count_all_hundred_level_students', 'count_all_hundred_level_materials', 
         
         'count_all_two_hundred_level_students', 'count_all_two_hundred_level_materials',

          'count_all_three_hundred_level_students', 'count_all_three_hundred_level_materials',

           'count_all_four_hundred_level_students', 'count_all_four_hundred_level_materials', 
           
           'count_all_students', 'count_all_materials'));
    }


    public function hundred_level_students(){
        $data = user::where('level_id', '1')->get();
        return view('admin.view_hundred_level_students', compact('data'));
    }


    public function two_hundred_level_students(){
        $data = user::where('level_id', '2')->get();
        return view('admin.view_two_hundred_level_students', compact('data'));
    }


    public function three_hundred_level_students(){
        $data = user::where('level_id', '3')->get();
        return view('admin.view_three_hundred_level_students', compact('data'));
    }


    public function four_hundred_level_students(){
        $data = user::where('level_id', '4')->get();
        return view('admin.view_four_hundred_level_students', compact('data'));
    }


    public function edit_student($id){
        $data = user::find($id);
        return view("admin.edit_student", compact("data"));
    }

    

    public function delete_student($id){
        $data = user::find($id);
        $data->delete();
        return redirect()->back()->with("message", "Student has been deleted");
    }


    
    public function update_student(Request $request, $id){

        $data = user::find($id);


        $data->matric = $request->matric;

        $data->name = $request->name;
 
        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->address = $request->address;
  


        $data->save();

        return redirect()->back()->with("message", "This Student's data has been updated");
  
        
    }



    public function upload_materials(Request $request){

        $data = new Materials;


        $file = $request->file;

        $filename = time(). '.' .$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $data->file = $filename;


        $data->title = $request->material_name;

        $data->description = $request->material_description;

 

        $data->level_id = $request->level_id;


 

        $data->save();

        return redirect()->back()->with('message', 'Document added successfully');
    }


    public function hundred_level_materials(){
        $data = materials::where('level_id', '1')->get();
        return view('admin.view_hundred_level_materials', compact('data'));
    }



    public function two_hundred_level_materials(){
        $data = materials::where('level_id', '2')->get();
        return view('admin.view_two_hundred_level_materials', compact('data'));
    }




    public function three_hundred_level_materials(){
        $data = materials::where('level_id', '3')->get();
        return view('admin.view_three_hundred_level_materials', compact('data'));
    }



    public function four_hundred_level_materials(){
        $data = materials::where('level_id', '4')->get();
        return view('admin.view_four_hundred_level_materials', compact('data'));
    }


    public function view_material($id){
        $data = materials::find($id);
        return view('admin.view_material', compact('data'));
    }

    public function view_logo(){
        $data = logo::all();
        return view('admin.view_logo', compact('data'));
    }


    public function remove_material($id){
        $data = materials::find($id);
        $data->delete();
        return redirect()->back()->with("message", "Material has been deleted");
    }


    public function download(Request $request, $file){
        return response()->download(public_path('assets/' . $file));
    }


    public function edit_logo($id){

        $data = logo::find($id);

    return view("admin.edit_logo", compact('data'));


    }



    public function update_logo(Request $request, $id){

        $data = logo::find($id);

        $image = $request->file;


        if($image){

       

        $imagename = time(). '.' .$image->getClientOriginalExtension();
        $request->file->move('logoimage', $imagename);

        $data->image = $imagename;

        }
        
        $data->save();

        return redirect()->back()->with('message', 'Logo has been updated :)'); 
    }


    public function delete_logo($id){

        $data = logo::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Logo has been removed!');

    }







}
