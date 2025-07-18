<?php

namespace App\Http\Controllers\Website;

use App\Models\AboutUs;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Products;
use App\Models\Review;
use App\Models\Price;
use App\Models\Ayurveda;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branches;
use App\Models\Blogs;
use App\Models\Reservation;


use Illuminate\Support\Facades\Validator;


class Menu extends Controller
{
   /**
    * @return view Menu
    */

   public function index()
   {
      $branchData =  Branches::where('status', 1)->get();
      return view('website.selectBranch', compact('branchData'));
   }
   public function menuPage($id)
   {

      $getcategory = Category::where('status', 1)->get();

      foreach ($getcategory as $category) {
         $subcategories = [];

         $getsub = SubCategory::where('status', 1)->where('cate_id', $category->id)->get();

         if ($getsub->isNotEmpty()) {
            foreach ($getsub as $subData) {
               $products = Products::where('status', 1)
                  ->where('category', $category->id)
                  ->where('sub_category', $subData->id)
                  ->get();

               $filteredProducts = [];

               foreach ($products as $product) {
                  $price = Price::where('status', 1)
                     ->where('branch_id', $id)
                     ->where('product_id', $product->id)
                     ->first();

                  if ($price) {
                     $product->price = $price->price;
                     $filteredProducts[] = $product;
                  }
               }

               $subData->products = $filteredProducts;
               $subcategories[] = $subData;
            }
         } else {
            $products = Products::where('status', 1)
               ->where('category', $category->id)
               ->get();

            $filteredProducts = [];

            foreach ($products as $product) {
               $price = Price::where('status', 1)
                  ->where('branch_id', $id)
                  ->where('product_id', $product->id)
                  ->first();

               if ($price) {
                  $product->price = $price->price;
                  $filteredProducts[] = $product;
               }
            }

            $category->products = $filteredProducts;
            $subcategories[] = $category;
         }

         $category->product = $subcategories;
      }

      return view('website.menuPage', compact('getcategory'));
   }
   public function aboutus()
   {
      $data = AboutUs::first();
      return view('website.aboutus', compact('data'));
   }
   public function gallery()
   {
      $imgages = Gallery::where('status', 1)->get();
      $chunks = $imgages->chunk(10);

      // Extract the chunks into separate variables
      $chunk1 = $chunks->get(0);
      $chunk2 = $chunks->get(1);
      $chunk3 = $chunks->get(2);
      $imagearr = [];

      foreach ($imgages as $data) {
         $image  =   explode('/gallery/', $data->image);
         $imagearr[] = $image[1];
      }
      // dd($imagearr);
      return view('website.gallery', compact('imgages'));
   }

   public function ayurveda()
   {
      $info = Ayurveda::first();
      return view('website.ayurveda', compact('info'));
   }

   public function branchIndex()
   {
      $branchData =  Branches::where('status', 1)->get();
      return view('website.branchIndex', compact('branchData'));
   }

   public function branch($id)
   {
      $branchData =  Branches::where('id', $id)->where('status', 1)->first();
      return view('website.branch', compact('branchData', 'id'));
   }
   public function storeReview(Request $request)
   {
      // dd($request->all());
      $ayurveda = Ayurveda::first();

      $blog =  Blogs::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
      $data = new Review();
      $data->name = $request->name;
      $data->email = $request->email;
      $data->phone = $request->phone;
      $data->type = $request->type;
      $data->rating = $request->rating;
      $data->comment = $request->opinion;
      $data->save();
      session()->flash('success', 'Review submitted successfully!');

      // Redirect back to the previous page
      return redirect()->back();
   }





   public function reservation(Request $request)
   {
    //   dd($request->all());

      $branch = Branches::find($request->id);
    //   dd($branch);

      $validator = Validator::make($request->all(), [
         'days'       => 'required|date|after_or_equal:today',
         'start_time' => 'required',
         'till'       => 'required',
         'firstName'  => 'required',
         'lastName'   => 'required',
         'phone'      => 'required',
         'email'      => 'required|email',
         'people'     => ['required', 'integer', 'min:1', 'max:' . $branch->seating_ability],
      ]);
      // dd($validator);



      if ($validator->fails()) {

         return redirect()->back()->withErrors($validator)->withInput();
      }


      $dayOfWeek = date('w', strtotime($request->days));
    //   dd($dayOfWeek);



      $dayTimestamp = strtotime($request->days);
    //   dd($dayTimestamp);


      $startTime = strtotime($request->start_time, $dayTimestamp);
      // dd($startTime);
      $endTime = strtotime($request->till, $dayTimestamp);
      //dd($endTime);


      $weekendOpening = strtotime($branch->weekend_opening, $dayTimestamp);
      //dd($weekendOpening);
      $weekendNoonClose = strtotime($branch->weekend_noon_close, $dayTimestamp);
      $weekendNoonOpen = strtotime($branch->weekend_noon_open, $dayTimestamp);
      $weekendClosing = strtotime($branch->weekend_closing, $dayTimestamp);

      $weekdayOpening = strtotime($branch->weekday_opening, $dayTimestamp);
      $weekdayNoonClose = strtotime($branch->weekday_noon_close, $dayTimestamp);
      $weekdayNoonOpen = strtotime($branch->weekday_noon_open, $dayTimestamp);
      $weekdayClosing = strtotime($branch->weekday_closing, $dayTimestamp);
    //   dd([
    //      'dayOfWeek' => $dayOfWeek,
    //      'dayTimestamp' => date('Y-m-d H:i:s', $dayTimestamp),
    //      'startTime' => date('Y-m-d H:i:s', $startTime),
    //      'endTime' => date('Y-m-d H:i:s', $endTime),
    //      'weekendOpening' => date('Y-m-d H:i:s', $weekendOpening),
    //      'weekendNoonClose' => date('Y-m-d H:i:s', $weekendNoonClose),
    //      'weekendNoonOpen' => date('Y-m-d H:i:s', $weekendNoonOpen),
    //      'weekendClosing' => date('Y-m-d H:i:s', $weekendClosing),
    //  ]);exit;

    $isValidTimeSlot = false;
      if ($dayOfWeek == 0 || $dayOfWeek == 6) {
        // echo 'dev2';exit;

         if (($startTime >= $weekendOpening && $endTime <= $weekendNoonClose) || ($startTime >= $weekendNoonOpen && $endTime <= $weekendClosing)) {
            // echo 'dev3';exit;
            $isValidTimeSlot = true;
         } else {
            // echo 'dev4';exit;
            //dd('Weekend timing check failed');

            session()->flash('error', 'Check the Timing of branch');
            return redirect()->back();
         }
      } else {
        // echo 'dev1';exit;
         if (($startTime >= $weekdayOpening && $endTime <= $weekdayNoonClose) || ($startTime >= $weekdayNoonOpen && $endTime <= $weekdayClosing)) {
            // echo 'dev1';exit;
            $isValidTimeSlot = true;
         } else {
            // echo 'dev2';exit;
            session()->flash('error', 'Check the Timing of branch');
            return redirect()->back();
         }
      }

    //   echo "dev";exit;

      $getReservation = Reservation::where('day', $request->days)

    ->where(function ($query) use ($request) {
        $query->where(function ($query) use ($request) {
                $query->where('start_from', '<=', $request->start_time)
                      ->where('till', '>=', $request->start_time);
            })
            ->orWhere(function ($query) use ($request) {
                $query->where('start_from', '<=', $request->till)
                      ->where('till', '>=', $request->till);
            })
            ->orWhere(function ($query) use ($request) {
                $query->where('start_from', '>=', $request->start_time)
                      ->where('till', '<=', $request->till);
            });
    })
    ->sum('people');
    //dd($getReservation);
       //  $date = $request->days->format('d/m/Y');
   // dd($date);

      if ($branch->seating_ability > $getReservation) {
         //dd("hello");
         $info = new Reservation();
         $info->fname = $request->firstName  ;
         $info->lname =  $request->lastName;
         $info->email = $request->email;
         $info->phone = $request->phone;
         $info->day = date('Y-m-d', strtotime(str_replace('-', '/', $request->days)));
         $info->start_from = $request->start_time;
         $info->till = $request->till;
         $info->people = $request->people;
         $info->requirements = $request->requirements;
         $info->branch_id = $request->id;
        //  dd($info);exit;

         $info->save();
      } else {
         session()->flash('error', 'Reservation is full this time. Please select another time.');
         return redirect()->back();
      }

      if ($info) {
         session()->flash('success', 'Reservation submitted successfully!');
         return redirect()->back();
      } else {
         session()->flash('error', 'An error occurred. Please try again later.');
         return redirect()->back();
      }
   }

   public function reservation_index()
   {

      $branchData =  Branches::where('status', 1)->get();

      return view('website.reservationIndex',compact('branchData'));

   }

   public function reservationPage($id)
   {
       //dd("reservation page");
      $branchData =  Branches::find($id);
      // dd($branchData);
      return view('website.reservationPage',compact('id','branchData'));

   }
}
