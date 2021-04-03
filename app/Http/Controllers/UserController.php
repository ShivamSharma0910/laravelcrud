<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Models\UserModel;                   /////define Model Here
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;    /////for define validate
use Illuminate\Validation\Rule;
use Auth;
use Hash;
use Session;
use DB;
use Mail;


class UserController extends Controller
{
    public function adduser(){

        return view('user.adduser');
    }///end add userview

    public function adduserd(Request $request){
        $rules = [
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255',
			'email' => 'required|string|email|max:255',
            'age' => 'required|string||min:6|max:255',
            'startdate' => 'required|string|min:6|max:255',
            'salary' => 'required|string|min:4|max:255',
            'uprofilepic' => 'required'
        ];
        $validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('adduser')
			->withInput()
			->withErrors($validator);
		}
		else{
                try{

                    $student = new UserModel();
                    $student->fname = $request->first_name;
                    $student->lname = $request->last_name;
                    $student->email = $request->email;
                    $student->age =   $request->age;
                    $student->startdate = $request->startdate;  
                    $student->salary = $request->salary;
                    $file = $request->file('uprofilepic');
                    $destinationPath = public_path().'/assets/images/';
                    $filename =Str::random(12).'_'.$file->getClientOriginalName();
                    $uploadSuccess = $file->move($destinationPath, $filename);
                    $path = "/assets/images/" . $filename;
                    $student->uprofilepic= $path;


                    $student->save();
                    return redirect('adduser')->with('status',"User Added Successful");
                }
                catch(Exception $e){
                    return redirect('adduser')->with('failed',"operation failed");
                }  
            }  	

      
    }///end adduserd

    public function viewuser(){
        $users = DB::select('select * from tbl_user');
        return view('user.viewuser',['users'=>$users]);
    }/////////function view-user end

    public function destroy($id) {
        DB::delete('delete from tbl_user where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        return redirect('viewuser');
        }///////funcation destroy end

        public function showuser($id){
            $user =DB::table('tbl_user')->where('id', $id)->first();
            return view('user.edituser',['user'=>$user]);
        }///////function edituser end

        public function updateuser(Request $request,$id){

            // return $request->input();
            $data=UserModel::find($request->id);
            $data->fname=$request->first_name;
            $data->lname=$request->last_name;
            $data->email=$request->email;
            $data->age=$request->age;
            $data->startdate=$request->startdate;
            $data->salary=$request->salary;
            $data->save();
            return redirect("viewuser");

            
        }//////////function updateuser end

      
            public function basic_email() {
               $data = array('name'=>"Bipin Sir");
            
               Mail::send(['text'=>'mail'], $data, function($message) {
                  $message->to('bipin@logimetrix.co.in', 'Hello Sir')->subject
                     ('First Email By Using Laravell');
                  $message->from('shivam.upmanyu12@gmail.com','Shivam Sharma');
               });
               echo "Basic Email Sent. Check your inbox.";
            }
            public function html_email() {
               $data = array('name'=>"Bipin Sir");
               Mail::send('mail', $data, function($message) {
                  $message->to('bipin@logimetrix.co.in', 'Hello Sir')->subject
                     ('First Email By Using Laravell');
                  $message->from('shivam.upmanyu12@gmail.com','Shivam Sharma');
               });
               echo "HTML Email Sent. Check your inbox.";
            }
           

        




        public function sentmail()
        {
          return view('user.usermail');
        }
        
        public function joins()
        {


            return  DB::table('tbl_user')                           //////first table name
            ->join('tbl_user_address', 'tbl_user.id', '=', 'tbl_user_address.id')////////second table name tbl_user_address
            ->get();


         //// return view('user.joins');
        }

}/////classs UserController End
