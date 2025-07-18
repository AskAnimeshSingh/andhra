<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Ayurveda;
use App\Models\Point;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\ProductAddOn;

class PointsControlller extends Controller
{
    /**
     * @return view about us
     */
   

    /**
     * @method use for show coupon ajax list
     */
   

    /**
     * @return view blog create form
     */
    public function add()
    {
        $data = Point::first();
        if ($data === null) {
            return view('admin.points.add');
        } else {
            return view('admin.points.add', compact('data'));
        }
    }

    /**
     * @param Request $request
     * @method use for store new AboutUs
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'yen'          => 'required',
            'points'   => 'required',
            'limit'   => 'required',
           
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
         
            $info = Point::firstOrNew();

            $info->yen                    = $request->input('yen');
            $info->points                 = $request->input('points');
            $info->limit                 = $request->input('limit');
            
            
        
            $info->save();
        if ($info) {
            // return response()->json(['status' => true, 'msg' => "Inforamtion created successfully"]);
            return redirect()->route('admin.points.addd')->with(['status' => true, 'msg' => "Inforamtion stored successfully"]);

        } else {
            return response()->json(['status' => false, 'msg' => "Error's Occour try again later"]);
            exit;
        }
    }
}

    /**
     * @return view Edit form
     */
    public function contact(){

        $data = Contact::first();
        if ($data === null) {
            return view('admin.contact.add');
        } else {
            return view('admin.contact.add', compact('data'));
        }
    }
    public function contactStore(Request $request){
        $validator = Validator::make($request->all(), [
            'phone'                 => 'required',
            'email'                 => 'required',
            'facebook_link'         => 'required',
            'insagram_link'         => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
         
            $info = Contact::firstOrNew();

            $info->phone_number                 = $request->input('phone');
            $info->email                        = $request->input('email');
            $info->facebook_link                = $request->input('facebook_link');
            $info->instagram_link               = $request->input('insagram_link');
            // $info->chef_description         = $request->input('banner_contact');
            
        
            if ($request->hasFile('banner_contact')) {
                $contact_banner = uniqid(time()) . '.' . $request->file('banner_contact')->extension();
                $request->file('banner_contact')->move(public_path('assets/admin/assets/img/story-images'), $contact_banner);
                $info->contact_banner = "/public/assets/admin/assets/img/story-images/" . $contact_banner;
                if ($info->contact_banner) {
                    $old_image_path = public_path($info->contact_banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
        
            
        
            $info->save();
        if ($info) {
            // return response()->json(['status' => true, 'msg' => "Inforamtion created successfully"]);
            return redirect()->route('admin.contact')->with(['status' => true, 'msg' => "Inforamtion stored successfully"]);

        } else {
            return response()->json(['status' => false, 'msg' => "Error's Occour try again later"]);
            exit;
        }
    }

    }

    public function ayurveda(){
        $data = Ayurveda::first();
        if ($data === null) {
            return view('admin.ayurveda.add');
        } else {
            return view('admin.ayurveda.add', compact('data'));
        }
    }

    public function ayurvedaStore(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'ayurveda'               => 'required',
            'ayurveda_jpn'           => 'required',
            'philosophy'             => 'required',
            'philosophy_jpn'         => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
         
            $info = Ayurveda::firstOrNew();

            $info->ayurveda_description                 = $request->input('ayurveda');
            $info->ayurveda_description_jpn                        = $request->input('ayurveda_jpn');
            $info->philosophy_description                = $request->input('philosophy');
            $info->philosophy_description_jpn               = $request->input('philosophy_jpn');
            // $info->chef_description         = $request->input('banner_contact');
            
        
            if ($request->hasFile('banner_ayurveda')) {
                $ayurveda_banner = uniqid(time()) . '.' . $request->file('banner_ayurveda')->extension();
                $request->file('banner_ayurveda')->move(public_path('assets/admin/assets/img/story-images'), $ayurveda_banner);
                $info->ayurveda_banner = "/public/assets/admin/assets/img/story-images/" . $ayurveda_banner;
                if ($info->ayurveda_banner) {
                    $old_image_path = public_path($info->ayurveda_banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('banner_philosophy')) {
                $philosophy_banner = uniqid(time()) . '.' . $request->file('banner_philosophy')->extension();
                $request->file('banner_philosophy')->move(public_path('assets/admin/assets/img/story-images'), $philosophy_banner);
                $info->philosophy_banner = "/public/assets/admin/assets/img/story-images/" . $philosophy_banner;
                if ($info->philosophy_banner) {
                    $old_image_path = public_path($info->philosophy_banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            
        
            $info->save();
        if ($info) {
            // return response()->json(['status' => true, 'msg' => "Inforamtion created successfully"]);
            return redirect()->route('admin.ayurveda')->with(['status' => true, 'msg' => "Inforamtion stored successfully"]);

        } else {
            return response()->json(['status' => false, 'msg' => "Error's Occour try again later"]);
            exit;
        }
    }
    }
  
  
}
