<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Category;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;


class CategoryController extends Controller
{
    
	public function index(){
        if (Auth::user()){
            // $categories=Category::All();
            $categories=DB::table('categories')->where('site_id',Auth::user()->id)->get();

            // return json_encode($categories);
            return  view ('category.index',compact('categories'));
       } else{
            return  redirect ('/login');   
       }
     }

     public function show($id){
        if (Auth::user()){
            return  view ('category.show');
        } else{
            return  redirect ('/login');   
        }
     }

     public function create(){
        if (Auth::user()){
            return  view ('category.create');
        }else{
            return  redirect ('/login');   
        }
     }

     public function store(Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'title_category' => 'required|max:300',
                'description' => 'required|max:2000',
                'image_category' => 'required|image',                 
            ]);

            $category= new Category;
            $category->name=$request->input('title_category');
            $category->description=$request->input('description');
            // for upload image
            if(Input::file('image_category')){
                // echo "image_category";die();
                $imagefile = Input::file('image_category');
                 $imagefile->move('assets/images',$imagefile->getClientOriginalName());
                 $category->image=$imagefile->getClientOriginalName(); 
            }
            $category->site_id=Auth::user()->id;
            $category->save();
    		return  redirect ('/category');
        } else{
            return  redirect ('/login');   
        }  
     }



     public function edit($id){
        if (Auth::user()){
            $category=Category::find($id);
            return  view ('category.edit',compact('category'));
        } else{
            return  redirect ('/login');   
        }    
     }


     public function update($id,Request $request){
        if (Auth::user()){

            $this->validate($request, [
                'title_category' => 'required|max:300',
                'description' => 'required|max:2000',
                // 'image_category' => 'required|image',                 
            ]);

            $category=Category::find($id);
            $category->name=$request->input('title_category');
            $category->description=$request->input('description');
            // for upload image 
            if(Input::file('image_category')){
                // echo "image_category";die();
                $imagefile = Input::file('image_category');
                 $imagefile->move('assets/images',$imagefile->getClientOriginalName());
                 $category->image=$imagefile->getClientOriginalName(); 
            }

            $category->site_id=Auth::user()->id;
            $category->save();
            // return  redirect ('categorys/'.$id);
    		return  redirect ('/category');
         } else{
            return  redirect ('/login');   
         }   
     }



     public function destroy($id){
        if (Auth::user()){
            $category=Category::find($id);
            // for use redirect
            $category->delete();
            return  redirect ('/category');
            // return  view ('category.index');
            // ****************************************************
            // // for use ajax for remove

            // // $category->delete();

            // // return true;
            // $affectedategories =$category->delete();
            // return json_encode( $affectedategories );
        } else{
            return  redirect ('/login');   
         } 
     }




}
