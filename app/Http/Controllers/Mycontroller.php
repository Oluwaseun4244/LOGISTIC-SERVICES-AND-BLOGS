<?php

namespace App\Http\Controllers;

use App\Mail\TrackingID;
use App\Models\About;
use App\Models\Blog;
use App\Models\Calculator;
use App\Models\Contact;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class Mycontroller extends Controller
{
   public function home()
   {
      $blogs = Blog::paginate(3);
      return view("home", compact("blogs"));
   }

   public function about()
   {
      $aboutFromDb = About::find(1);
      return view("about-us", compact("aboutFromDb"));
   }
   public function bloglist()
   {
      $allpost = Blog::paginate(2);
      return view("blog-list", compact("allpost"));
   }




   public function blogdetails($id)
   {
      // dd($id);
      $blogdetails = Blog::find($id);
      return view("blog-details", compact("blogdetails"));
   }




   public function getquote(Request $Request)
   {

      if ($Request->isMethod("POST")) {
         // dd($Request);
         $Request->validate([
            "name" => "required",
            "freight" => "required",
            "email" => "required",
            "phone" => "required",
            "pickup" => "required",
            "dropoff" => "required",
            "weight" => "required",
            "distance" => "required"
         ]);

         $allRequest = $Request->all();
         // $allRequest["trackingID"] = uniqid();
         return redirect("/placeorder/$Request->name/$Request->freight/$Request->email/$Request->phone/$Request->pickup/$Request->dropoff/$Request->weight/$Request->distance");
      }
      return view("quote");
   }



   public function contact(Request $Request)
   {
      if ($Request->isMethod("POST")) {
         $Request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "subject" => "required",
            "comment" => "required"
         ]);
         // dd($Request);
         $saveContactToDB = Contact::create($Request->all());
         if ($saveContactToDB) {

            return redirect("contact#contacted")->with("created", "Thanks for contacting us, we will get back to you shortly");
         } else {
            return back()->with("wrong", "Something went wrong");
         }
      }
      return view("contact");
   }



   public function placeorder(Request $Request, $name, $freight, $email, $phone, $pickup, $dropoff, $weight, $distance)

   {




      $calc = Calculator::find(1);

      $kg = $calc['kg'];
      $km = $calc['km'];
      $air = $calc['air_freight'];
      $ocean = $calc['ocean_freight'];
      $road = $calc["road_freight"];

      if ($freight == "Air Freight") {
         $freightAmount = $air;
      } elseif ($freight == "Ocean Freight") {
         $freightAmount = $ocean;
      } elseif ($freight == "Road Freight") {
         $freightAmount = $road;
      }

      $total = ($freightAmount) + ($kg * $weight) + ($km * $distance);

      if ($Request->isMethod("POST")) {

         $quotes = [
            "name" => $name,
            "freight" => $freight,
            "email" => $email,
            "phone" => $phone,
            "pickup" => $pickup,
            "dropoff" => $dropoff,
            "weight" => $weight,
            "distance" => $distance,
            "total" => $total,

         ];
         // "trackingID" => $trackingID,
         $trackingID = uniqid();

         $quotes["trackingID"] = $trackingID;

         Mail::to($Request->email)->send(new TrackingID($quotes));
         $saveOrderToDB = Quote::create($quotes);

         if ($saveOrderToDB) {

            return redirect()->route("placed", $quotes);
         } else {
            return "something went wrong";
         }
      }

      $calc = Calculator::all();
      return view("placeorder", compact("name", "freight", "email", "phone", "pickup", "dropoff", "weight", "distance", "calc", "total"));
   }

   public function placed(Request $Request)
   {
      $quotes = $Request->all();
      return view("placed", compact("quotes"));
   }


   public function admindashboard(Request $Request)
   {
      $eachContact = Contact::paginate(10);
      return view("admindashboard", compact("eachContact"));
   }


   public function signup(Request $Request){
      if ($Request->isMethod("POST")) {

         $allRequest = $Request->all();

         $allRequest["password"] = Hash::make($Request->password);
         $savetodb = User::create($allRequest);
         if($savetodb){
            return back()->with("message", "You have successfully signed up");
         } else {
            return back()->with("message", "something went wrong");
         }

      }
      return view("signup");
   }


   public function adminlogin(Request $Request)
   {
      if((Session::has("adminKey"))){
         return redirect('admindashboard');
     }

      if ($Request->isMethod("POST")) {
         $emailAndPassword = $Request->validate([
            "email" => "required",
            "password" => "required",
         ]);

         $crossCheck = Auth::attempt($emailAndPassword);
        
         if($crossCheck){
            Session::put("adminKey", true);
            return redirect("admindashboard");

            // $Request->Session()->put("adminKey", true);
            // return redirect("admindashboard");
         }
      }
      return view("adminlogin");
   }

   public function signout(){
      Session::flush();
      // Session()->flush();
      return redirect("adminlogin");
   }

   public function calculator()
   {
      $calcdetails = Calculator::all();
      return view("calculator", compact("calcdetails"));
   }

   public function editcalculator(Request $Request, $id)
   {
      $recordToEdit = Calculator::find($id);
      // dd($recordToEdit);
      if ($Request->isMethod("POST")) {

         $updated = Calculator::where("id", $id)->update(["km" => $Request->km, "kg" => $Request->kg, "air_freight" => $Request->air_freight, "ocean_freight" => $Request->ocean_freight, "road_freight" => $Request->road_freight]);
         if ($updated) {
            return back()->with("edited", "You have successfully edited the rates");
         }
      }

      return view("calcedit", compact("recordToEdit"));
   }
   public function orders(Request $Request)
   {

      $orders = Quote::paginate(10);

      return view("orders", compact("orders"));
   }


   public function orderview(Request $Request, $id)
   {

      $oneId = Quote::find($id);

      if ($Request->isMethod("POST")) {
         $editingStatus = Quote::where("id", $id)->update(["orderStatus" => $Request->status]);
         if ($editingStatus) {
            return back()->with("status", "Status Updated successfully");
         } else {
            return "Something went wrong";
         }
      }
      return view("orderview", compact("oneId"));
   }
   public function track(Request $Request)
   {

      if ($Request->isMethod("POST")) {
         // dd($Request);
         // $orderCheck = Quote::where("trackingID", $Request->trackingID)->first();
         // dd($orderCheck);
         // return view("track", compact("orderCheck"));
         return redirect()->route("tracked", $Request);
      }


      return view("track");
   }
   public function tracked(Request $Request)
   {
 
      $orderCheck = Quote::where("trackingID", $Request->trackingID)->first();



      return view("tracked", compact("orderCheck"));
   }

   public function settings()
   {
      $settings = About::find(1);
      return view("settings", compact("settings"));
   }
   public function settingsedit(Request $Request, $id)
   {

      $settingsToEdit = About::find($id);
      if ($Request->isMethod("POST")) {
         
         $settingsEdited = About::where("id", $id)->update(["weAre" => $Request->weAre, "first" => $Request->first, "second" => $Request->second, "founder" => $Request->founder,]);
         if ($settingsEdited){
            return back()->with("edited", "About us successfully updated");
         } else {
            return back()->with("edited", "Something went wrong");
         }
      }
      return view("settingsedit", compact("settingsToEdit"));
   }

   public function blogs(){
      $allblogs = Blog::paginate(3);
      return view("blogs", compact("allblogs"));
   }
   
   public function addblog(Request $Request){
      
      
      if($Request->isMethod("POST")){

         $allRequest = $Request->all(); //so that I can modify it
         // $image = $Request->file("image"); //saving the file into variable image
         // $destination = "images"; //indicating the destination folder
         // $image->move($destination, $image->getClientOriginalName()); //moving file to destination with orig. name

         //getting the original image name from request
         $imageName = $Request->file("image")->getClientOriginalName();
         
         
    
         $destination = $Request->image->move(("images"), $imageName);

         $allRequest["image"] = $destination;

         $saveBlog = Blog::create($allRequest);
         if($saveBlog){
            return back()->with("saved", "Blog addedd successfully");
         } else {
            return back()->with("saved", "Something went wrong");
         }
      }

      return view("addblog");
   }


   public function blogedit(Request $Request, $id){
      $blogToEdit = Blog::find($id);
      if ($Request->isMethod("POST")){

         $allRequest = $Request->all();
         $imageName = $Request->file("image")->getClientOriginalName();
         $destination = $Request->image->move(("images"), $imageName);

         // $allRequest["image"] = $destination;

            $edited = Blog::where("id", $id)->update(["title" => $Request->title, "author" => $Request->author, "image" => $destination, "content" => $Request->content]);
            if($edited){
               return back()->with("edited", "blog successfully updated");
            }

      }


      return view("blogedit", compact("blogToEdit"));
   }

   public function blogdelete(Request $Request, $id){
      $blogToDelete = Blog::find($id);
      if ($Request->isMethod("POST")){
         $deleteBlog = Blog::where("id", $id)->delete();

         if($deleteBlog){
            return back()->with("deleted", "blog deleted successfully");
         } else {
            return back()->with("deleted", "Something went");
         }
      }
      return view("blogdelete", compact("blogToDelete"));
   }
}
