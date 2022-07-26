<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {

        return view ('login.login');
    }
    public function registration(){



        return view('login.registration');
    }
    public function registrationSubmit(Request $request){

        $validate=$request->validate([
            "username"=>"required|min:5|max:20",
          
            "email"=>"required|email",
            "number"=>"required|min:11|max:20",
            "gender"=>"required",
          
            
            "password"=>"required|min:6|max:20",
            "dob"=>"required",
          
        ],
      );
      if($validate){

        $username=$request->post('username');
        $number= $request->post('number');
        $password= $request->post('password');
        $name=$request->post('name');
        $gender=$request->post('gender');
        $email=$request->post('email');
        $date=$request->post('dob');

      
        $men = new Delivery ();
        $men->name = $username;
        $men->number = $number;
        $men->password = $password;
        $men->fullname = $name;
        $men->gender = $gender;
        $men->email = $email;
        $men->dob = $date;
      
        $men->save();


        if($men){

            session()->flash('error','New registration Successfull Now login');
            return redirect('registration');
         
          }
          else {
            session()->flash('error','Please inpute correct Number and Password');
            return redirect('registration');
          }

          

    }
}

    public function loginSubmit(Request $request){

        $validate=$request->validate([
            "email"=>"required|email",
            
            "password"=>"required|min:6|max:20",
          
        ],
      );
      if($validate){
        $result = Delivery::where('email',$request->email)
        ->where('password',$request->password)
        ->first();

        if($result){

          $request->session()->put('user',$result->name);
          $request->session()->put('email',$result->email);
          $request->session()->put('number',$result->number);
          $request->session()->put('id',$result->id);



           
            return redirect('index');
         
          }
          else {
            session()->flash('error','Please inpute correct Number and Password');
            return redirect('');
          }
      
          
    
       }
    
     }





     public function profile(){

      $number = session()->get('email');
      
      $Delivery = Delivery :: where('email',$number)->first();

      return view('profile.profile')->with('Delivery',$Delivery);
     }







     public function editprofile(){
      $number=session()->get('number');
      $Delivery=Delivery :: where('number',$number)->first();

      return view('profile.editprofile')->with('Delivery',$Delivery);
     }



    public function editprofileSubmitted(Request $request){


      $validate=$request->validate([
        "name"=>"required|min:5|max:20",
        "fullname"=>"required|min:5|max:20",
      
        "email"=>"required|email",
        "number"=>"required|min:11|max:20",
       
        "dob"=>"required",
      
    ],
  );
  if($validate){

    $username=$request->post('fullname');
    $number= $request->post('number');
    $name=$request->post('name');
    $email=$request->post('email');
    $date=$request->post('dob');
    $password=$request->post('password');

  
    $men = Delivery :: where('id',$request->id)->first();
    $men->name = $username;
    $men->number = $number;
    $men->fullname = $name;
    $men->email = $email;
    $men->dob = $date;
  
    $men->save();


    if($men){

        session()->flash('error','New Profile updated Successfull ');
        return redirect('profile');
     
      }
      else {
        session()->flash('error','Data is not updated');
        return redirect('profile.profile');
      }

    }
}
public function logout(){

  session()->forget('user');
  session()->forget('email');
  session()->forget('number');
  session()->forget('id');

  return redirect()->route('login');

}
public function APIList(){

  return Delivery::latest('id')->get();
} 
public function APIPost(Request $request){

        $username=$request->post('name');
        $number= $request->post('number');
        $password= $request->post('password');
        $name=$request->post('fullname');
        $gender=$request->post('gender');
        $email=$request->post('email');
        $date=$request->post('dob');

      
        $men = new Delivery ();
        $men->name = $username;
        $men->number = $number;
        $men->password = $password;
        $men->fullname = $name;
        $men->gender = $gender;
        $men->email = $email;
        $men->dob = $date;
      
        $men->save();

  return $request;
}


}