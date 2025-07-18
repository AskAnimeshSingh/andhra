<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Review;
class RatingController extends Controller
{
    /**
     * @return view category
     */
    public function index()
    {
        return view('admin.rating.index');
    }

    /**
     * @param Request $request
     * @method use for store category
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'category'  => 'required',
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
                $request->image->move(public_path('assets/admin/assets/img/category'), $favicon);
                $favicon = "/public/assets/admin/assets/img/category/" . $favicon;
            } else {
                $favicon = '/public/assets/admin/assets/img/default_cate.jpeg';
            }

            $data = new ModelsCategory();
            $input['cate_name'] = $request->category;
            $input['cate_img']  = $favicon;

            $save = $data->fill($input)->save();
        }

        if($save)
        {
            return response()->json(['status' => true , 'msg' => "Category saved successfully"]);
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
    public function ratingAjaxList(Request $request)
    {
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

        $total = Review::orWhere('reviews.name' , 'like' , '%'. $search.'%')
        ->select('reviews.*',"branches.name as branchName")
        ->leftjoin('branches','branches.id','reviews.type')
        ->count();

        $category = Review::orWhere('reviews.name' , 'like' , '%'. $search.'%')
        ->leftjoin('branches','branches.id','reviews.type')
        ->select('reviews.*',"branches.name as branchName")
            ->offset($ofset)->limit($limit)
            ->orderBy($nameOrder , $orderType)->get();
        $i = 1 + $ofset;
        $data = [];
        foreach ($category as $cate) {

            if($cate->type == 0){
                $typeName = "Home-Page";
            }elseif($cate->type == null){
                $typeName ="";
            }else{
                $typeName = $cate->branchName; 
            }

            $status = '<button class="statusVerifiedClick btn '. ($cate->status == 1 ? "btn-success btn-sm" : "btn-danger btn-sm").'  " data-status="'.($cate->status == 1  ? '0' : '1' ).'" data-id="'. $cate->id .'">'.($cate->status == 1 ? "Active" : "De-Active" ).'</button>
                       ';
            $data[] = array(
                $i++,
                $cate->name,
                $typeName,
                $cate->email,
                $cate->phone,
                $cate->rating,
                $cate->comment,
                $status,
                '<a href="#" class="btn btn-danger btn-sm category-delete" data-id="'.$cate->id .'"><i class="fa fa-trash"></i></a>',

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
            'category'  => 'required',
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
                $request->image->move(public_path('assets/admin/assets/img/category'), $favicon);
                $favicon = "/public/assets/admin/assets/img/category/" . $favicon;

            } else {
                $favicon = '/public/assets/admin/assets/img/default_cate.jpeg';
            }

            $data = ModelsCategory::findOrFail($request->cateid);
            $data->cate_name = $request->category;
            if ($request->file('image') != "") {
                $data->cate_img  = $favicon;
            }

            $save = $data->update();
        }

        if($save)
        {
            return response()->json(['status' => true , 'msg' => "Category updated successfully"]);
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
        $where = array('id' => $request->id);
        $data = array(
            'status' => $request->status,
        );

        $update = Review::where($where)->update($data);

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
                $cate = Review::find($request->id);
                $del = Review::where($where)->delete();
                // File::delete(public_path('../' . $cate->img));

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
