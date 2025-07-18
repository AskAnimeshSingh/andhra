<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * @return view category
     */
    public function index()
    {
        return view('admin.gallery.index');
    }

    /**
     * @param Request $request
     * @method use for store category
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            // 'category'  => 'required',
            'image'     => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'msg' => $validator->errors()->first()]);
            exit;
        }
        else
        {
            if ($request->file('image') != "") {
                $favicon = uniqid(time()) . '.' . $request->image->extension();
                $request->image->move(public_path('assets/admin/assets/img/gallery'), $favicon);
                $favicon = "/public/assets/admin/assets/img/gallery/" . $favicon;
            } else {
                $favicon = '/public/assets/admin/assets/img/default_cate.jpeg';
            }

            $data = new Gallery();
            // $input['cate_name'] = $request->category;
            $input['image']  = $favicon;

            $save = $data->fill($input)->save();
        }

        if($save)
        {
            return response()->json(['status' => true , 'msg' => "Image saved successfully"]);
            exit;
        }
        else
        {
            return response()->json(['status' => false , 'msg' => "Error's Occurs !! Try again later"]);
            exit;
        }
    }

    /**
     * @method use for show category ajax list
     */
    public function galleryAjaxList(Request $request)
    {
        // print_r('hello');exit;
        if(isset($_GET['search']['value'])){
            $search = $_GET['search']['value'];
        }
        else{
            $search = '';
        }
        if(isset($_GET['length'])){
            $limit = $_GET['length'];
        }
        else{
            $limit = 10;
        }

        if(isset($_GET['start'])){
            $ofset = $_GET['start'];
        }
        else{
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = $_GET['columns'][0]['name'];

        $total = Gallery::count();
        $category = Gallery::offset($ofset)->limit($limit)
            ->orderBy($nameOrder , $orderType)->get();
            // dd($category);
        $i = 1 + $ofset;
        $data = [];
        foreach ($category as $cate) {

            $status = '<button class="statusVerifiedClick btn '. ($cate->status == 1 ? "btn-success btn-sm" : "btn-danger btn-sm").'  " data-status="'.($cate->status == 1  ? '0' : '1' ).'" data-id="'. $cate->id .'">'.($cate->status == 1 ? "Active" : "De-Active" ).'</button>
                       ';
            $data[] = array(
                $i++,
                
                '<img class="img-fluid" src="'.url($cate->image ?  $cate->image : 'public/assets/admin/assets/img/default_cate.jpeg').'" style="width:50%;">',
                $status,
                '<a  href="#" class="editCategory btn btn-info btn-sm " data-name="'.$cate->cate_name.'" data-img="'.$cate->image.'" data-id="'.$cate->id.'"> <i class="fa fa-edit"></i></a> |
                    <a href="#" class="btn btn-danger btn-sm category-delete" data-id="'.$cate->id .'"><i class="fa fa-trash"></i></a>',

                 );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] =  $total;
        $records['data'] = $data;
        echo json_encode($records);
    }

    /**
     * @param Request $request
     * @method use for update category
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all() , [
            // 'category'  => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['status' => false , 'msg' => $validator->errors()->first()]);
            exit;
        }
        else
        {
            if ($request->file('image') != "") {
                File::delete(public_path('../'.$request->oldimage));
                $favicon = uniqid(time()) . '.' . $request->image->extension();
                $request->image->move(public_path('assets/admin/assets/img/gallery'), $favicon);
                $favicon = "/public/assets/admin/assets/img/gallery/" . $favicon;

            } else {
                $favicon = '/public/assets/admin/assets/img/default_cate.jpeg';
            }

            $data = Gallery::findOrFail($request->cateid);
            // $data->cate_name = $request->category;
            if ($request->file('image') != "") {
                $data->image  = $favicon;
            }

            $save = $data->update();
        }

        if($save)
        {
            return response()->json(['status' => true , 'msg' => "Image updated successfully"]);
            exit;
        }
        else
        {
            return response()->json(['status' => false , 'msg' => "Error's Occurs !! Try again later"]);
            exit;
        }
    }

    /**
     * @param Request $reqeust
     * @method use for update status for category
     */
    public function status(Request $request)
    {
        // dd($request);
        $where = array('id' => $request->id);
        $data = array(
            'status' => $request->status,
        );

        $update = Gallery::where($where)->update($data);

        if($update)
        {
            return response()->json(array('status' => true,'msg' => "Successfully Updated !"));
            exit;
        }
        else
        {
            return response()->json(array('status' => false,'msg' => "Error Occured, please try again"));
            exit;
        }
    }

    /**
     * @param Request $request
     * @method use for destroy category
     */
    public function destroy(Request $request)
    {
        try{
                $where = array('id' => $request->id);
                $cate = Gallery::find($request->id);
                $del = Gallery::where($where)->delete();
                File::delete(public_path('../' . $cate->img));

            if ($del) {
                return response()->json(array('status' => true, 'msg' => "Successfully Deleted !!!!"));
                exit;
            } else {
                return response()->json(array('status' => false, 'msg' => "Error Occured, please try again"));
                exit;
            }
        }
        catch (\Illuminate\Database\QueryException $e ) {
            return response()->json(array('status' => false, 'msg' => 'Something went wrong !!!!'));
        }
    }

}
