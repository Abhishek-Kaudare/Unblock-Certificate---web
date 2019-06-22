<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class Users extends Controller
{
     
     public function showAllDocs()
    {
        //
    }
     public function showAllcerti()
    {
        //
    }
     public function getuseregisteruser()
    {
        return view('userregister');
    }
     public function registeruser(Request $request)
    {
            $fullname = $request->fullname;
            $email    = $request->email;
            $con1     = $request->con1;
            if($request->hasFile('addprof')){
            if (Input::file('addprof')->isValid()) {
                $file = Input::file('addprof');
                $destination = storage_path('/');
                $ext= $file->getClientOriginalExtension();
                $mainFilename = str_random(6).'.'.time();
                $addproffile = $con1.$fullname.'addprof'.'.'.$ext;
                $file->move($destination, $addproffile);
            }
            }


            $idprof   = $request->idprof;
            if($request->hasFile('idprof')){
            if (Input::file('idprof')->isValid()) {
                $file = Input::file('idprof');
                $destination = storage_path('/');
                $ext= $file->getClientOriginalExtension();
                $mainFilename = str_random(6).'.'.time();
                $idproffile = $con1.$fullname.'idprof.'.$ext;
                $file->move($destination, $idproffile);
            }
    }
    DB::insert("INSERT INTO `users`(`user_Id`, `PRN`, `password`, `card_Iocation`, `fname`, `lname`, `full_name`, `gender`, `contact_1`, `contact_2`, `address`, `email`, `profile_pic`, `addprof`, `idprof`) 
            VALUES (null,'0','','','','','$fullname','','$con1','','','$email','','$addproffile','$idproffile')");
        return view('userregister');


}
     public function getuserlogin()
    {
        return view('admin.admin_login');
    }
     public function userlogin()
    {
        //
    }
     public function getUserHomeScreen()
    {
        //
    }
     public function getDocA()
    {
        //
    }
     public function DocA()
    {
        //
    }
     public function seeAppliedDocsStatus()
    {
        //
    }
     public function reApply()
    {
        //
    }
}
