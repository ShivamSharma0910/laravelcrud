<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AuthModel;                   /////define Model Here
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;    /////for define validate
use Illuminate\Validation\Rule;
use Auth;
use Hash;
use Session;

class AuthController extends Controller
{
    public function signupview(){
        return view('user.signupview');
    }/////end function signupview

    public function create(Request $request){

        $rules = [
                'first_name' => 'required|string|min:3|max:255',
                'last_name' => 'required|string|min:3|max:255',
                'email' => 'required|string|email|unique:users|max:255',
                'password' => 'required|string||min:6|max:255',
                'cpassword' => 'required|string|min:6|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('signup')
			->withInput()
			->withErrors($validator);
		}
		else{
                try{
                    $student = new AuthModel();
                    $student->fname = $request->first_name;
                    $student->lname = $request->last_name;
                    $student->email = $request->email;
                    $student->password = Hash::make($request->password);
                    $student->save();
                    return redirect('signup')->with('status',"Registration Successful");
                }
                catch(Exception $e){
                    return redirect('signup')->with('failed',"operation failed");
                }  
        }  	
    }///create Fn End


    public function loginview(){  
        return view('user.login');
    }///end function Loginview

    public function loginpost(Request $request){
        $this->validate($request, [
            'email' => 'required|string|email|max:191',
            'password' => 'required|string|min:6'
        ]);
      
       $credentials = $request->only('email', 'password');    
       if (Auth::attempt($credentials)) {
        return redirect('dashboard');
    }  
    return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }///////end loginpost function

    public function logout(){
         Auth::logout();
         Session::flush();
         return redirect('login');
    }////end logout function

   
    public function forgotpassword(){   
        return view('user.forgotpassword');
    }
}///////class end
