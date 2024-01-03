<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('signup');
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'date' => 'required',
            'subject' => 'required',
            'gender' => 'required',
        ]);

        $user = User::create([
         
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'date'=>$request->date,
            'subject'=>$request->subject,
            'gender'=>$request->gender

           
        ]);

      return view('login');
    }
   
     public function login(Request $request){
        // dd($request);

        $user = Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
//  dd($user);
 
        if($user){
            return redirect('welcomepage');
        }else{
            return view('login');
        }
     }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = User::all();
        return view('welcomepage',['user'=>$user]);
    }

    public function patten(){
        
      

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $user = User::find($id);
       $user->name= $request->input('name');
      $user->email= $request->input('email');
       $user->date= $request->input('date');
       $user->gender= $request->input('gender');
       $user->subject= $request->input('subject');
       $user->password= $request->input('password');
       $user->save();
      return redirect('welcomepage');

    }

    public function search(Request $request)
{
    $user = $request->input('search');
    $search = User::where('name', 'like', '%'. $user . '%')->get();
    return view('welcomepage',['search'=>$search]);
}
 
    public function googlelogin(){

         return Socialite::driver('google')->redirect();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request, $id)
    {
         $user = User::find($id)->delete();
         return redirect('welcomepage');
    }

    public function logout(Request $request){

        Auth::logout();
        return view('login');
    }
}
