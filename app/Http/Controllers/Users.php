<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

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
        return view('add');
    }
     public function registeruser()
    {
        //
    }
     public function getuserlogin()
    {
        return view('admin.admin_login');
    }
     public function userlogin()
    {
        // return view('admin.admin_login');
    }
     public function getUserHomeScreen()
    {
        //
    }
     public function getDocA()
    {
        return view('docAapply');
    }
     public function DocA()
    {
        //
    }
     public function seeAppliedDocsStatus()
    {
        return view('seeAppliedDocStatus');
    }
     public function reApply()
    {
        //
    }

    // public function getPdf($id=null)
    //  {
    //         $invoice = PDF::loadView('pdf.pdf_bill');
    //         return $invoice->stream();

    //     }



}
