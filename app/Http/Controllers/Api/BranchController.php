<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branches;
use App\Models\Price;
use App\Models\Products;
use App\Models\Category;


class BranchController extends Controller
{
    public function getBranches(){
        $branches = Branches::get();
        if (count($branches) > 0){
            return response()->json([
                'status' => true,
                'message' => 'Branches found!!',
                'data' => $branches
            ], 201);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'No branches found!!',
                'data' => null
            ], 401);
        }
    }

    public function branch($id){
        try{
            if(empty($id)) {
                return response()->json(['status' => false, 'msg' => 'Id cann not be empty!!']);
            }
            else{
                $branch = Branches::where('id',$id)->first();
                return response()->json(['status' => true, 'data' => $branch]);
            }
        }catch(\Illuminate\Database\QueryException $e){
            // dd($e);
            return response()->json(['status' =>false, 'msg' => $e ]);
        }
    }


    public function menu($id){
        if(empty($id)) {
            return response()->json(['status' => false, 'msg' => 'Id cann not be empty!!']);
        }
         else{
            $searchData= Price::where('branch_id',$id)
            ->leftjoin('products','products.id','prices.product_id')
            ->leftjoin('categories','categories.id','products.category')
            ->where('products.status',1)
            ->select('products.*','prices.price as Pprice','categories.cate_name','prices.branch_id as branch_id')
            ->get();
            if(!empty($searchData)){
             foreach($searchData as $data){
                 $data->price = $data->Pprice;
             }
             return response()->json(['status' => true, 'data' => $searchData]);
            }
            else{
             return response()->json(['status' => false, 'msg' => 'Not Data avilabel']);
            }
         }     
    }

}
