<?php

namespace App\Http\Controllers;

use App\Models\signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records=Signup::all();
        return view('user_listing',['records'=>$records]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signup_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required | min:3 | max:20',
            'email'=>'required | email  | max:100',
            'password'=>'required | min:8 | max:16',
        ]);
        $model=new signup();
        $model->username=$request->username;
        $model->email=$request->email;
        $model->password=$request->password;
        if($model->save()){
            return redirect()->route('list');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=Signup::find($id);
        return view('edit_form',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'username'=>'required | min:3 | max:20',
            'email'=>'required | email  | max:100',
        ]);
        $rec=Signup::find($id);
        $rec->username=$request->username;
        $rec->email=$request->email;
        if($rec->save()){
            return redirect()->route('list');
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        if(Signup::destroy($id)){
            return redirect()->route('list');
        }else{
            return 'Failed!';
        }
    }

  
}
