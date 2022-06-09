<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\LinkGeneratorPayment;
use App\Models\SalesPerson;
use App\Models\SalesPayment;

class UserController extends Controller
{
    public function Login(){
        return View('Admin.login');
    }

    public function createSignin(Request $request)
    {
           

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $data = $request->input();
            

            $request -> session()->put('email' , $data['email']);

            $users = User::where('email','=',$data['email'])->first();

           
            session()->put('id' , $users->id);
            session()->put('name' , $users->name);
            return redirect()->intended('admin_dashboard');
        }
      

        return redirect("/admin_login")->with ('error_signin','Credentials are wrong.');
    }


    public function index(){
        if(Auth::check()){
            $users_count = User::count();
            $invoices_count = LinkGeneratorPayment::count();
            $spm_count = SalesPayment::count();
            $spe_count = SalesPerson::count();

            $invoice = LinkGeneratorPayment::whereDate('created_at', date('Y-m-d'))->orderBy('id','DESC')->get();
            return View('Admin.index',compact('invoice','users_count','invoices_count','spm_count','spe_count'));
        }
        return redirect("/");

    }

    public function user_table(){
        if(Auth::check()){
            $users = User::orderBy('id','DESC')->get();
            return View('Admin.Users.user_table', compact('users'));
        }
        return redirect("/");
    }

    public function AddUser(){
        if(Auth::check()){
        return View('Admin.Users.add_user');
    }
    return redirect("/");
    }

    public function createUser(Request $request)
    {
        if(Auth::check()){  
            $request->validate([
                'name' => 'required|regex:/[a-zA-Z]+$/u',
                'email' => 'required|email|unique:Users',
                'password' => 'required|min:6',
            ]);

            if($p = User::create ($request -> input()) )
            {
                   
                $p->name = $request->name;
                $p->email = $request->email;
                $p->password = Hash::make($request->password);        

                $p->save();

                 return back()->with ('user_created','Successfully created');
            }
        }
        return redirect("/");
  
    }

    public function EditUser($id){
        if(Auth::check()){  
          $users= User::find($id);

        return View('Admin.Users.edit_user',compact('users'));
        }
        return redirect("/");
    }

    public function updateUsers(Request $request)
    {

        if(Auth::check()){  
        $users = User::find($request -> id);



        $request->validate([
            'name' => 'required|regex:/[a-zA-Z]+$/u',
            'email' => 'required',  
        ]);
        
     
        $users->name = $request->name;
        $users->email = $request->email;
     
        $users->save();
        return back()->with ('user_updated','Successfully Updated');
    }

     return redirect("/");
    }

    public function deleteUsers($id)
    {
        if(Auth::check()){  
         User::where('id' , $id)->delete();

        return back()->with('user_deleted' , 'User successfully deleted!');
        }
        return redirect("/");

    }


    public function logout() {
        if(Auth::check()){  
        Session::flush();
        Auth::logout();
        return Redirect('/admin_login');
        }
        return redirect("/");
    }

    
}
