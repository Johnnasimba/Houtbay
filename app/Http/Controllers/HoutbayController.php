<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Applicants;
use App\Client;
use App\Rates;
use App\Extra;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redis;

class HoutbayController extends Controller
{
 public function index() {
     $Applicants = DB::table('applicants')
         ->join('extras', function($join){ $join->on('applicants.id', '=', 'extras.extra_id');})
         ->paginate(15);
    return view( 'Home', ['Applicants' =>$Applicants,] );
 }


 public function browse($jobType) {
     $Applicants =DB::table('applicants')
     ->where('firstJob', 'like', '%'.$jobType.'%') 
     ->orWhere('secondJob', 'like', '%'.$jobType.'%') 
     ->orWhere('thirdJob', 'like', '%'.$jobType.'%') 
     ->orWhere('forthJob', 'like', '%'.$jobType.'%') 
     ->join('extras', function($join){ $join->on('applicants.id', '=', 'extras.extra_id');})
     ->paginate(15);
     
    return view( 'browse', ['Applicants' =>$Applicants, 'jobType'=> $jobType] );
 }

public function search(Request $request) {
   $search = $request->get('search');
   $Applicants = DB::table("applicants") 
   ->where('firstJob', 'like', '%'.$search.'%') 
     ->orWhere('secondJob', 'like', '%'.$search.'%') 
     ->orWhere('thirdJob', 'like', '%'.$search.'%') 
     ->orWhere('forthJob', 'like', '%'.$search.'%') 
     ->join('extras', function($join){ $join->on('applicants.id', '=', 'extras.extra_id');})
     ->paginate(15);     
    
    return view ('Search' , ['Applicants' =>$Applicants, 'search'=> $search]);
}




 public function login(Request $req) {
   $user = User::all();
   $req->session()->put('data', $req->input());
  
   if($user[0]->password === $req->input('password') && $user[0]->email ===$req->input('email')) 
   {
      $clients = DB::table('clients') 
      ->join('applicants', function($join){ $join->on('clients.contact_id', '=', 'applicants.id');})
      ->get();
      return view('Admin',  ['clients'=>$clients]);
  } else{   
      session()->forget('data');   
      return redirect('/login')->with('mssg', 'Email and password does not match!');
      
      }
}

public function about() {
   return view('about');
  }
  

 
 public function getlogin() {
   return view('login');
}
 
 public function logout() {
    session()->forget('data');
   return redirect('/');
}
public function Admin() { 
   $clientRequest = DB::table('clients')
   ->join('applicants', function($join){ $join->on('clients.contact_id', '=', 'applicants.id');})
   ->groupBy("created_at")
   ->get();
   return view('Admin',  ['clients'=>$clientRequest]);  
}
 public function addApplicant() {
   session()->forget('data'); 
   return view('addApplicant');
}

public function post(Request $request) {
   $Applicant = new Applicants();
   $Applicant->firstName = request('firstName');
   $Applicant->lastName = request('lastName');
   $Applicant->location = request('location');
   $Applicant->firstJob = request('firstJob');
   $Applicant->secondJob = request('secondJob');
   $Applicant->thirdJob = request('thirdJob');
   $Applicant->forthJob = request('forthJob');
   $Applicant->firstName = request('firstName');

   if($request->hasfile('image')){
      $file = $request->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = time(). '.' . $extension;
      $file->move('uploads/', $filename);
      $Applicant->image = $filename;

   }else{
      return $request;
      $Applicant->image='';
   }
     $Applicant->save();
   return redirect('/')->with('success', 'Thank you for adding new applicant');
}


 public function Details($id) {
   $Applicant = DB::table('applicants')
            ->join('extras', function($join){ $join->on('applicants.id', '=', 'extras.extra_id');})
            ->where('extras.extra_id', '=', $id)
            ->get();

            $relatedId = $Applicant[0]->id;
            $firstJob = $Applicant[0]->firstJob;
            $secondJob = $Applicant[0]->secondJob;
   $related = DB::table('applicants')            
            ->where('id', '!=',  $relatedId)
            ->where('firstJob', 'like', '%'.$firstJob.'%')
            ->where('id', '!=',  $relatedId)
            ->orWhere('firstJob', 'like', '%'.$secondJob.'%')
            ->where('id', '!=',  $relatedId)
            ->orWhere('secondJob', 'like', '%'.$firstJob.'%')
            ->where('id', '!=',  $relatedId)
            ->orWhere('secondJob', 'like', '%'.$secondJob.'%')
            ->where('id', '!=',  $relatedId)
            ->limit(4)
            ->get();
   $rates = DB::table('rates')
            ->where('applicant_id', '=', $id)
            ->get();
   $numRates = DB::table('rates')
            ->where('applicant_id', '=', $id)
            ->count();
   $totalRates = DB::table('rates')
            ->where('applicant_id', '=', $id)
            ->sum('userReview');
            
   
   return view('Details', ['Applicant'=>$Applicant,'related'=>$related, 'rates'=>$rates, 'numRates'=>$numRates, 'totalRates'=>$totalRates]);
 }

 public function clientPost($id) {
    $client = new Client();

     $client->name = request('name');
     $client->email = request('email');
     $client->number = request('number');     
     $client->message = request('message');
     $client->date = request('date');
     $client->contact_id = $id;
     $client->save();
     return back()->with('success', 'Message sent successfully');
 }

 public function postRates($id) {
   $rates= new Rates();

       $rates->applicant_id = $id;
       $rates->userName= request('user-name');
       $rates->userReview = request('user-review');
       $rates->userMessage = request('user-message');
       $rates->dateReviewed = request('date-reviewed');
   $rates->save();
    return back()->with('success', 'Thank you for your recommendation');
}

}

