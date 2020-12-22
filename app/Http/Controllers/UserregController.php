<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserregController extends Controller
{
    
    public function index()
    {
       return view('userreg');
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        print_r($request->all());
        $firstname=$request->txt1st;
        $lastname=$request->txtlast;
        $organization=$request->txtOrg;
        $street=$request->UsrStreet;
        $city=$request->UsrCty;
        $email=$request->UsrEmail;
        $phone=$request->usernmbr;
        $passward=$request->pwd;
        $confirm_pass=$request->rePwd;
        

      DB::insert("insert into userregs(first_name,last_name,organization,street,city,email,phone,passward,confirm_pass)values('$firstname','$lastname','$organization','$street','$city','$email','$phone','$passward','$confirm_pass') ");
      return redirect()->back();

    }
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
       
    }

    
    public function update(Request $request, $id)
    {
       
    }

    
    public function destroy($id)
    {
        
    }
}
