<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Models\Branches;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Services\FileUploadService;

class ChefController extends Controller
{
    public function index()
    {
        $branch = Branches::where('status',1)->select('id','name')->get();
        return view('admin.chef.index',compact('branch'));
    }

    public function addChef(Request $request)
    {
        // dd($request->all());
        $rules = [
            'first_name' => 'required',
            'branch' => 'required',
            'last_name' => 'required',
            'image' => 'required',
            "email" => "required|email|max:128|unique:chefs",
            "phone" => "required|max:11|min:9|unique:chefs",
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(array('status' => false, 'msg' => $validator->errors()->first()));
            exit;
        }
        // $admin = Auth::guard('admin')->user();

        // $data = $request->validated();
        $chef = new Chef();
        $chef->first_name = $request->first_name;
        $chef->last_name = $request->last_name;
        $chef->branch_id = $request->branch;

        if ($request->file('image') != "") {
            $favicon = FileUploadService::upload($request->image, 'uploads/chef/img');
        }
        // dd($favicon);
        $chef->image  = $favicon;
        $chef->email = $request->email;
        $chef->status = $request->status;
        $chef->phone = $request->phone;
        $chef->save();
        // return redirect()->back()->with('status','chef Added Successfully');

        if ($chef) {

            return response()->json(array('status' => true, 'msg' => "Successfully Added", 'location' => route('admin.chef')));
        } else {
            return response()->json(array('status' => false, 'msg' => "Something went wrong, please try again"));
        }
    }

    public function chefList()
    {
        $branch = Branches::where('status',1)->select('id','name')->get();

        return view('admin.chef.chef_list',compact('branch'));
    }

    public function chefListAjax(Request $request)
    {
        // $admin = Auth::guard('admin')->user();
        // dd($request->all());
        if (isset($_GET['search']['value'])) {
            $search = $_GET['search']['value'];
        } else {
            $search = '';
        }
        if (isset($_GET['length'])) {
            $limit = $_GET['length'];
        } else {
            $limit = 10;
        }

        if (isset($_GET['start'])) {
            $ofset = $_GET['start'];
        } else {
            $ofset = 0;
        }

        $orderType = $_GET['order'][0]['dir'];
        $nameOrder = $_GET['columns'][$_GET['order'][0]['column']]['name'];

        if (isset($_GET['branch']) && $_GET['branch'] == 'all') {
            $branchId = null; 
        } else {
            $branchId = $_GET['branch']; 
        }

        $totalQuery = Chef::where('first_name', 'like', '%' . $search . '%')
    ->leftjoin('branches', 'branches.id', 'chefs.branch_id')
    ->select('chefs.*', 'branches.name as branchName');

// Apply branch filter to total count query if a specific branch is selected
if ($branchId !== null) {
    $totalQuery->where('chefs.branch_id', $branchId);
}

// Get the total count of records
$total = $totalQuery->count();

// Build the base query for fetching paginated results
$chefQuery = Chef::where('first_name', 'like', '%' . $search . '%')
    ->leftjoin('branches', 'branches.id', 'chefs.branch_id')
    ->select('chefs.*', 'branches.name as branchName');

// Apply branch filter to paginated results query if a specific branch is selected
if ($branchId !== null) {
    $chefQuery->where('chefs.branch_id', $branchId);
}

// Apply pagination
$chef = $chefQuery->offset($ofset)->limit($limit)->get();
            // dd($chef);
        $i = 1 + $ofset;
        $data = [];

        foreach ($chef as $chf) {
            $url = route('admin.edit.chef', ['id' => $chf->id]);
            $status = '<button class="statusVerifiedClick btn ' . ($chf->status == '0' ? "btn-success btn-sm" : "btn-danger btn-sm") . '  " data-status="' . ($chf->status == '0'  ? '1' : '0') . '" data-id="' . $chf->id . '">' . ($chf->status == '0' ? "Active" : "Inactive") . '</button>
                     ';
            $data[] = array(
                $i++,
                $chf->first_name,
                $chf->last_name,
                $chf->branchName,
                '<img class="img-fluid" src="' . url($chf->image) . '" width="70px;">',
                $chf->email,
                $chf->phone,
                $status,
                '<a  href=' . $url . ' class="editchef btn btn-info btn-sm "  data-id="' . $chf->id . '"> Edit</a> |  <a href="#" class="btn btn-danger btn-sm delete_chef" data-id="' . $chf->id . '">Delete</a>',

            );
        }
        $records['recordsTotal'] = $total;
        $records['recordsFiltered'] =  $total;
        $records['data'] = $data;
        echo json_encode($records);
    }

    public function editChef($id)
    {
        $chef = Chef::find($id);
        $branch = Branches::where('status',1)->select('id','name')->get();

        return view('admin.chef.edit_chef', compact('chef','branch'));
    }

    public function updateChef(Request $request)
    {

        // dd($request->id);
        // // echo $request->id;
        // // exit;

        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'branch' => 'required',
            'image' => 'nullable',
            "email" => 'required|email|max:128|unique:chefs,email,' . $request->id,
            "phone" => 'required|max:11|min:9|unique:chefs,phone,' . $request->id,
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(array('status' => false, 'msg' => $validator->errors()->first()));
            exit;
        }
        // $data = $request->validated();
        $chef = Chef::find($request->id);
        $chef->first_name = $request->first_name;
        $chef->last_name = $request->last_name;
        $chef->branch_id = $request->branch;


        if ($request->file('image') != "") {
            $favicon = FileUploadService::upload($request->image, 'uploads/chef/img');
            $chef->image  = $favicon;
        }
        // dd($favicon);

        $chef->email = $request->email;
        $chef->status = $request->status;
        $chef->phone = $request->phone;
        $chef->update();
        // return redirect()->back()->with('status','chef Added Successfully');

        if ($chef) {

            return response()->json(array('status' => true, 'msg' => "Successfully Updated", 'location' => route('admin.list.chef')));
        } else {
            return response()->json(array('status' => false, 'msg' => "Something went wrong, please try again"));
        }
    }

    public function deleteChef(Request $request)
    {
        $chef = Chef::find($request->id);
        if($chef)
        {
            $chef->delete();
            return response()->json(array('status' => true, 'msg' => "Successfully Deleted"));
            exit;
        }
        else
        {
            return response()->json(array('status' => false, 'msg' => "Something went wrong, please try again"));
        }
    }

    public function statusChef(Request $request)
    {
        $where = array('id' => $request->id);
        $data = array(
            'status' => $request->status,
        );

        $update = Chef::where($where)->update($data);

        if($update)
        {
            return response()->json(array('status' => true,'msg' => "Status Updated Successfully!"));
            exit;
        }
        else
        {
            return response()->json(array('status' => false,'msg' => "Error Occured, please try again"));
            exit;
        }
    }
}
