<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('login');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        // print_r($request->all());
        $request->validate([
            'EmailXnumber'=>'required'



        ]);

        $useremail_or_nmr=$request->EmailXnumber;
        $passward=$request->passward;

        $user=DB::select("select email,phone,passward from userregs where (email='$useremail_or_nmr' or phone='$useremail_or_nmr') and passward='$passward'");

        
        if(count($user)>=1){
            return redirect('userreg');
        }else{
            echo"User Email Or phone Number Or Passward Doesn't Match";
        }

    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
