<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use App\Contact;
use App\Message;
use App\Page;
// use Request;
use Auth;
use \Input as Input;   //or use this -------->  use Illuminate\Support\Facades\Input as input;
use DB;
use Session;


class ContactUsController extends Controller
{
    
	public function index(){
        if (Auth::user()){
            // select contact us of this only site;
            if(Auth::user()->status == 'reseller')
            {
                $contacts=DB::table('contacts')->where('site_id',Session::get('user_id'))->get();
                $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                    //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
                $site_id=Session::get('user_id');
            }
            else
            {
                $contacts=DB::table('contacts')->where('site_id',Auth::user()->id)->get();
                $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
                $site_id=Auth::user()->site->id;
            }

            // $pages=Page::where('site_id', $site_id)->get();
            $pages = DB::table('pages')->where('site_id',$site_id)->get();

            $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
            $count_message=count($unseen_messages);

            if($contacts){
                return  view ('contactus.index',compact('categories','subcategories','pages','contacts','count_message'));
            }else{
                // return  view ('contactus.create',compact('contacts'));
                return  redirect ('/contactus/create');
            }    
       } else{
            return  redirect ('/login');   
       }
     }

     public function show($id){
        if (Auth::user()){
            return  view ('contactus.show');
        } else{
            return  redirect ('/login');   
        }
     }


     public function create(){
        if (Auth::user()){
            // select contact us of this only site;
            if(Auth::user()->status == 'reseller')
            {
                $contacts=DB::table('contacts')->where('site_id',Session::get('user_id'))->get();
                $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                    //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
                $site_id=Session::get('user_id');
            }
            else
            {
                $contacts=DB::table('contacts')->where('site_id',Auth::user()->id)->get();
                $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
                $site_id=Auth::user()->site->id;
            }

            // $pages=Page::where('site_id', $site_id)->get();
            $pages = DB::table('pages')->where('site_id',$site_id)->get();

            $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
            $count_message=count($unseen_messages);

             if($contacts){
                return  view ('contactus.index',compact('categories','subcategories','pages','contacts','count_message'));
            }else{
                return  view ('contactus.create',compact('categories','subcategories','pages','contacts','count_message'));
            }
        }else{
            return  redirect ('/login');   
        }
     }

     public function store(Request $request){
        if (Auth::user()){
            $this->validate($request, [
                'address' => 'max:255',
                'ar_address' => 'max:255',
                'lat' => 'max:255',
                'lng' => 'max:255',
                'phone' => 'max:255',
                'mobile' => 'max:255',
                'ar_phone' => 'max:255',
                'ar_mobile' => 'max:255',
                'email' => 'max:255',
                'fax' => 'max:255',
                'facebook' => 'max:255', 
                'google_plus' => 'max:255', 
                'instagram' => 'max:255', 
                'pinterest' => 'max:255',   
                'linkedin' => 'max:255', 
                'youtube' => 'max:255',          
            ]);

            $contact= new Contact;
            if(Auth::user()->status == 'reseller')
            {
                $contact->site_id=Session::get('user_id');
            }
            else
            {
                $contact->site_id=Auth::user()->id;
            }
               //becaues site_id of contactus is same as id of user 
            $contact->address=trim($request->input('address'));
            $contact->ar_address=trim($request->input('ar_address'));
            // data from google map

            $contact->lat=trim($request->input('latitude'));
            $contact->lng=trim($request->input('longitude'));
            $contact->phone=trim($request->input('phone'));
            $contact->mobile=trim($request->input('mobile'));
            $contact->ar_phone=trim($request->input('ar_phone'));
            $contact->ar_mobile=trim($request->input('ar_mobile'));
            $contact->email=trim($request->input('email'));
            $contact->fax=trim($request->input('fax'));
            $contact->facebook=trim($request->input('facebook'));
            $contact->google_plus=trim($request->input('google_plus'));
            $contact->instagram=trim($request->input('instagram'));
            $contact->pinterest=trim($request->input('pinterest'));
            $contact->linkedin=trim($request->input('linkedin'));
            $contact->youtube=trim($request->input('youtube'));
            $is_saved=$contact->save();
           if($is_saved){
                Session::flash('insert_success', 'A new contact us has been added successfully');
                return  redirect ('/contactus');
            }else{
                abort(500);
            }
        } else{
            return  redirect ('/login');   
        } 
     }



     public function edit($id){
        if (Auth::user()){
            try
            {
                $contact=Contact::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            
            if(Auth::user()->status == 'reseller')
            {
                $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                        //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
                $site_id=Session::get('user_id');
            }
            else
           
            {
                $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                         //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
                $site_id=Auth::user()->site->id;    
            }

            // $pages=Page::where('site_id', $site_id)->get();
            $pages = DB::table('pages')->where('site_id',$site_id)->get();

            $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
            $count_message=count($unseen_messages);
            
            return  view ('contactus.edit',compact('categories','subcategories','pages','contact','count_message'));
        } else{
            return  redirect ('/login');   
        }
     }


     public function update($id,Request $request){
        if (Auth::user()){
            try
            {
                $contact=Contact::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }

            $this->validate($request, [
                'address' => 'max:255',
                'ar_address' => 'max:255',
                'lat' => 'max:255',
                'lng' => 'max:255',
                'phone' => 'max:255',
                'mobile' => 'max:255',
                'ar_phone' => 'max:255',
                'ar_mobile' => 'max:255',
                'email' => 'max:255',
                'fax' => 'max:255',
                'facebook' => 'max:255', 
                'google_plus' => 'max:255', 
                'instagram' => 'max:255', 
                'pinterest' => 'max:255',   
                'linkedin' => 'max:255', 
                'youtube' => 'max:255',          
            ]);

            if(Auth::user()->status == 'reseller')
            {
                $contact->id=Session::get('user_id');   
            }
            else
            {
                $contact->id=Auth::user()->id;   //becaues id of contactus is same as id of site that equal id of user
            }
            
            $contact->address=trim($request->input('address'));
            $contact->ar_address=trim($request->input('ar_address'));

            // data from google map
            $lat=trim($request->input('latitude'));
            $lng=trim($request->input('longitude'));
            if (!(empty($lat) and empty($lng))){
                $contact->lat=trim($request->input('latitude'));
                $contact->lng=trim($request->input('longitude'));
            }
            
            $contact->phone=trim($request->input('phone'));
            $contact->mobile=trim($request->input('mobile'));
            $contact->ar_phone=trim($request->input('ar_phone'));
            $contact->ar_mobile=trim($request->input('ar_mobile'));
            $contact->email=trim($request->input('email'));
            $contact->fax=trim($request->input('fax'));
            $contact->facebook=trim($request->input('facebook'));
            $contact->google_plus=trim($request->input('google_plus'));
            $contact->instagram=trim($request->input('instagram'));
            $contact->pinterest=trim($request->input('pinterest'));
            $contact->linkedin=trim($request->input('linkedin'));
            $contact->youtube=trim($request->input('youtube'));
            $is_saved=$contact->save();
           if($is_saved){
                Session::flash('update_success', 'the contact us item has been updated successfully');
                return  redirect ('/contactus');
            }else{
                abort(500);
            }
        } else{
            return  redirect ('/login');   
        } 
     }



     public function destroy($id){
        if (Auth::user()){
            try
            {
                $contact=Contact::findOrFail($id);

            }
            catch(Exception $e)
            {
                throw new ModelNotFoundException($e->getMassege());
                
            }
            // $contact=Contact::find($id);
            // for use redirect
            // $contact->delete();
            // return  redirect ('/contactus');
            // return  view ('contactus.index');
            // ****************************************************
            // // for use ajax for remove

            $del_contacts =$contact->delete();
            return json_encode( $del_contacts );
        } else{
            return  redirect ('/login');   
         } 
     }

}