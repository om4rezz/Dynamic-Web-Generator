<?php

namespace App\Http\Controllers;

use Auth;

use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Header;
use App\Page;
use DB;
use Session;
use App\Message; 

class BrandingController extends Controller {

    private $site;
    private $request;
    public function __construct(Request $request) {
        $this->request = $request;
        if(Auth::user()->status == 'reseller')
        {
           $user_site = DB::table('sites')->where('id',Session::get('user_id'))->get();
           $this->site = $user_site;
        }
        else
        {
            $this->site = $this->request->user()->site; 
        }
       
    }

    private function upload_image($image) {
        if(Auth::user()->status == 'reseller')
        {
            $user_site = DB::table('sites')->where('id',Session::get('user_id'))->get();
            $doman_name = $user_site[0]->subdomain;
        }
        else
        {
            $domain_name = $this->request->user()->site['subdomain'];
        }

        $directory = "/assets/images/$domain_name/branding/";
        if (Input::file('image')->move(public_path() . $directory, $image)) {
            return $directory . $image;
        }
        return FALSE;
    }

    public function index() {
//        $branding = $request->user()->site->header;
        try{
             if(Auth::user()->status == 'reseller')
             {
                $branding = DB::table('headers')->where('site_id',Session::get('user_id'))->get();
                // return view('branding.index')->withBranding($this->site->header);
                 $categories = DB::table('categories')->where('site_id',Session::get('user_id'))->get();
                    //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Session::get('user_id'))->whereNotNull('category_id')->get();
                $site_id=Session::get('user_id');
             }
             else
             {
                $branding = DB::table('headers')->where('site_id',Auth::user()->id)->get();
                $categories = DB::table('categories')->where('site_id',Auth::user()->id)->get();
                     //select all subcategories have category_id
                $subcategories =DB::table('categories')->where('site_id',Auth::user()->id)->whereNotNull('category_id')->get();
                $site_id=Auth::user()->site->id;
             }
            
             $pages = DB::table('pages')->where('site_id',$site_id)->get();

            $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
            $count_message=count($unseen_messages);

             if($branding != null)
             {
                return view('branding.index',compact('categories','subcategories','pages','count_message'))->withBranding($branding);
             }
             else
             {
                return redirect('/branding/create');
             }
        }catch (\Exception $e) {
            $branding = DB::table('headers')->where('site_id',Session::get('user_id'))->get();

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
            
             $pages = DB::table('pages')->where('site_id',$site_id)->get();
             
             $unseen_messages=Message::where('is_seen','=',false)->where('site_id','=',$site_id)->get();
            $count_message=count($unseen_messages);

            return view('branding.index',compact('categories','subcategories','pages','branding','count_message'));    
        }
    }

    public function show($id) {

        return view('branding.show');
    }

    public function create() {

        try{
            if($this->site->header)
            {

                $id =$this->site->header->id;
                return redirect("branding/edit/".$id);
            }
            else
            {
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
                return view('branding.create',compact('categories','subcategories','pages','count_message'));
            }
        }
        catch (\Exception $e) {

            return redirect('branding/create');
        }
        
        
    }

    public function store(Request $request) {
        // dd($request->all());
        $this->validate($request, [
            'company_name' => 'required|max:255',
            'ar_company_name' => 'required|max:255',

            'slogan' => 'required',
            'ar_slogan' => 'required',

            'logo' => 'max:2000',
        ]);
        $header = new Header($request->all());

        if(Auth::user()->status == 'reseller')
        {
            $header->site_id =  Session::get('user_id');
        }
        else
        {
            $header->site_id = Auth::user()->id;
        }

        // get the subdomain
        if(Auth::user()->status == 'reseller')
        {
            $user_site = DB::table('sites')->where('id',Session::get('user_id'))->get();
            $domain_name = $user_site[0]->subdomain;
        }
        else
        {
            $domain_name = $this->request->user()->site['subdomain'];
        }

        $imagePath='';
        if(Input::hasFile('logo')){  
                $file = Input::file('logo');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/assets/images/'.$domain_name.'/branding/',time().'.'.$extension);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/images/'.$domain_name.'/branding/'.time().'.'.$extension;
        }
        $header->logo = $imagePath;

        if($header->addHeader($header)) 
        {
            return redirect('/branding');
        }
        return redirect('/branding/create')->withErrors('Something error');
    }


    public function edit(Header $header) {
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

        return view('branding.edit',compact('categories','subcategories','pages','header','count_message'));
    }

    public function update(Request $request, Header $header) {
        $this->validate($request, [
            'company_name' => 'required|max:2000',
            'ar_company_name' => 'required|max:2000',
            'slogan' => 'required',
            'ar_slogan' => 'required',
            // 'logo' => 'max:20',
        ]);

        if(Auth::user()->status == 'reseller')
        {
            $user_site = DB::table('sites')->where('id',Session::get('user_id'))->get();
            $domain_name = $user_site[0]->subdomain;
        }
        else
        {
            $domain_name = $this->request->user()->site['subdomain'];
        }
        
        // $domain_name = $this->request->user()->site['subdomain'];
        $old_imag_name = $header['attributes']['logo'];
        $imagePath=$old_imag_name;
        $has_new_file = 0;
        if(Input::hasFile('logo')){  
                $has_new_file = 1;
                $file = Input::file('logo');
                $extension = $file->getClientOriginalExtension();
                $file = $file->move(public_path().'/assets/images/'.$domain_name.'/branding/',time().'.'.$extension);
                // $user->image = $file->getRealPath();
                $imagePath = '/assets/images/'.$domain_name.'/branding/'.time().'.'.$extension;
        }

        if($header->update([
            'company_name'=>$request->all()['company_name'],
            'ar_company_name'=>$request->all()['ar_company_name'],
            'slogan' => $request->all()['slogan'],
            'ar_slogan' => $request->all()['ar_slogan'],
            'logo' => $imagePath,
        ]))
       {
        if($has_new_file == 1)
        {
                try {
                    unlink(public_path().$old_imag_name);    
                }
                catch (\Exception $e) {
                }
        }

            return redirect('/branding');
       }
       // dd('hit');
       return back();
    }

    public function delete(Header $header) {
        $header->delete();
        return back(); 
    }

}
