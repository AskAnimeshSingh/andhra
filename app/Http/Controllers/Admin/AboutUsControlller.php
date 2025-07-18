<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Ayurveda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\ProductAddOn;

class AboutUsControlller extends Controller
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
        $data = AboutUs::first();
        if ($data === null) {
            return view('admin.aboutus.add');
        } else {
            return view('admin.aboutus.add', compact('data'));
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
            'story_eng'          => 'required',
            'story_jpn'   => 'required',
            'andra'         => 'required',
            'andra_jp'         => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $info = AboutUs::firstOrNew();

            $info->our_story                    = $request->input('story_eng');
            $info->our_story_jp                 = $request->input('story_jpn');
            $info->andra_jp                     = $request->input('andra_jp');
            $info->andra                        = $request->input('andra');
            $info->chef_description             = $request->input('chef_description');
            $info->chef_description_jpn         = $request->input('chef_description_jpn');
            $info->head_chef_name               = $request->input('head_chef_name');
            $info->head_chef_name_jpn           = $request->input('head_chef_name_jpn');
            $info->head_chef_description        = $request->input('head_chef_description');
            $info->head_chef_description_jpn    = $request->input('head_chef_descr_jpn');


            if ($request->hasFile('banner_head_chef')) {
                $head_chef_banner = uniqid(time()) . '.' . $request->file('banner_head_chef')->extension();
                $request->file('banner_head_chef')->move(public_path('assets/admin/assets/img/story-images'), $head_chef_banner);
                $info->head_chef_banner = "/public/assets/admin/assets/img/story-images/" . $head_chef_banner;
                if ($info->head_chef_banner) {
                    $old_image_path = public_path($info->head_chef_banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }

            if ($request->hasFile('banner_story')) {
                $story_banner = uniqid(time()) . '.' . $request->file('banner_story')->extension();
                $request->file('banner_story')->move(public_path('assets/admin/assets/img/story-images'), $story_banner);
                $info->story_banner = "/public/assets/admin/assets/img/story-images/" . $story_banner;
                if ($info->banner_story) {
                    $old_image_path = public_path($info->banner_story);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }

            if ($request->hasFile('banner_abdra')) {
                $andra_banner = uniqid(time()) . '.' . $request->file('banner_abdra')->extension();
                $request->file('banner_abdra')->move(public_path('assets/admin/assets/img/story-images'), $andra_banner);
                $info->andra_banner = "/public/assets/admin/assets/img/story-images/" . $andra_banner;
                if ($info->banner_abdra) {
                    $old_image_path = public_path($info->banner_abdra);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('banner_chef')) {
                $chef_banner = uniqid(time()) . '.' . $request->file('banner_chef')->extension();
                $request->file('banner_chef')->move(public_path('assets/admin/assets/img/story-images'), $chef_banner);
                $info->chef_banner = "/public/assets/admin/assets/img/story-images/" . $chef_banner;
                if ($info->chef_banner) {
                    $old_image_path = public_path($info->chef_banner);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }

            if ($request->hasFile('story_img1')) {
                $story_image1 = uniqid(time()) . '.' . $request->file('story_img1')->extension();
                $request->file('story_img1')->move(public_path('assets/admin/assets/img/story-images'), $story_image1);
                // Set the attribute in the model with the new file path
                $info['story_image1'] = "/public/assets/admin/assets/img/story-images/" . $story_image1;
                if ($info->story_img1) {
                    $old_image_path = public_path($info->story_img1);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('story_img2')) {
                $story_image2 = uniqid(time()) . '.' . $request->file('story_img2')->extension();
                $request->file('story_img2')->move(public_path('assets/admin/assets/img/story-images'), $story_image2);
                // Set the attribute in the model with the new file path
                $info['story_image2'] = "/public/assets/admin/assets/img/story-images/" . $story_image2;
                if ($info->story_img1) {
                    $old_image_path = public_path($info->story_img1);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('story_img3')) {
                $story_image3 = uniqid(time()) . '.' . $request->file('story_img3')->extension();
                $request->file('story_img3')->move(public_path('assets/admin/assets/img/story-images'), $story_image3);
                // Set the attribute in the model with the new file path
                $info['story_image3'] = "/public/assets/admin/assets/img/story-images/" . $story_image3;
                if ($info->story_img3) {
                    $old_image_path = public_path($info->story_img3);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('story_img4')) {
                $story_image4 = uniqid(time()) . '.' . $request->file('story_img4')->extension();
                $request->file('story_img4')->move(public_path('assets/admin/assets/img/story-images'), $story_image4);
                // Set the attribute in the model with the new file path
                $info['story_image4'] = "/public/assets/admin/assets/img/story-images/" . $story_image4;
                if ($info->banner_story) {
                    $old_image_path = public_path($info->banner_story);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }


            if ($request->hasFile('andra_img1')) {
                $andra_image1 = uniqid(time()) . '.' . $request->file('andra_img1')->extension();
                $request->file('andra_img1')->move(public_path('assets/admin/assets/img/story-images'), $andra_image1);
                // Set the attribute in the model with the new file path
                $info['andra_image1'] = "/public/assets/admin/assets/img/story-images/" . $andra_image1;
                if ($info->andra_img1) {
                    $old_image_path = public_path($info->andra_img1);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('andra_img2')) {
                $andra_image2 = uniqid(time()) . '.' . $request->file('andra_img2')->extension();
                $request->file('andra_img2')->move(public_path('assets/admin/assets/img/story-images'), $andra_image2);
                // Set the attribute in the model with the new file path
                $info['andra_image2'] = "/public/assets/admin/assets/img/story-images/" . $andra_image2;
                if ($info->andra_img2) {
                    $old_image_path = public_path($info->andra_img2);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('andra_img3')) {
                $andra_image3 = uniqid(time()) . '.' . $request->file('andra_img3')->extension();
                $request->file('andra_img3')->move(public_path('assets/admin/assets/img/story-images'), $andra_image3);
                // Set the attribute in the model with the new file path
                $info['andra_image3'] = "/public/assets/admin/assets/img/story-images/" . $andra_image3;
                if ($info->andra_img3) {
                    $old_image_path = public_path($info->andra_img3);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
            if ($request->hasFile('andra_img4')) {
                $andra_image4 = uniqid(time()) . '.' . $request->file('andra_img4')->extension();
                $request->file('andra_img4')->move(public_path('assets/admin/assets/img/story-images'), $andra_image4);
                // Set the attribute in the model with the new file path
                $info['andra_image4'] = "/public/assets/admin/assets/img/story-images/" . $andra_image4;
                if ($info->andra_img4) {
                    $old_image_path = public_path($info->andra_img4);
                    if (File::exists($old_image_path)) {
                        File::delete($old_image_path);
                    }
                }
            }
                // dd($info);
            $info->save();
        if ($info) {
            // return response()->json(['status' => true, 'msg' => "Inforamtion created successfully"]);
            return redirect()->route('admin.about_us.addd')->with(['status' => true, 'msg' => "Inforamtion stored successfully"]);

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
            'tiktok'         => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {

            $info = Contact::firstOrNew();

            $info->phone_number                 = $request->input('phone');
            $info->email                        = $request->input('email');
            $info->facebook_link                = $request->input('facebook_link');
            $info->instagram_link               = $request->input('insagram_link');
            $info->tiktok               = $request->input('tiktok');
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
