<?php

namespace App\Http\Controllers;
use DB;
use App\r;
use Illuminate\Http\Request;

class officer extends Controller
{
    public function getNewUserApplication()
    {
        $values = DB::select("select * from users where PRN = 0");
        return view('admin.status')->with('values',$values);    
    }
     public function NewUserApplication()
    {
        
    }
    public function getofficerlogin()
    {
        return view('officerlogin');
    }
    public function officerlogin()

    {
        //
    }
    public function addprof()
    {
        //
    }
    public function idprof()
    {
        //
    }
    public function accept()
    {
        //
    }
    public function reject()
    {
        //
    }
    public function getOfficerHomeScreen()
    {
        //
    }
    public function idprofA()
    {
        //
    }
    public function addprofA()
    {
        //
    }
    public function acceptDoc()
    {
        //
    }
    public function rejectDoc()
    {
        //
    }
    public function appliedForA()

    {
        return view('appliedForA');
    }
}
