<?php
use GuzzleHttp\Client;
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use GuzzleHttp\Client;


use GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;


class Users extends Controller
{
     public function home($id)
    {
        return view('home');
    }

     public function showAllDocs()
    {
        
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
     public function userlogin(Request $request){

     $PRN = $request->prn;
     $pass = $request->password;
    
    $f = DB::select("select * from users where PRN ='$PRN' AND password ='$pass'");
        $id = $f[0]->user_Id;
        return redirect("/$id");
    }
     public function getUserHomeScreen()
    {
        //
    }
     public function getDocA()
    {
        return view('docAapply');
    }
     public function DocA(Request $request)
    {
            
            $fullname = $request->fullname;
            $email    = $request->age;
            $con1     = $request->add;
            if($request->hasFile('fileA')){
            if (Input::file('fileA')->isValid()) {
                $file = Input::file('fileA');
                $destination = storage_path('/');
                $ext= $file->getClientOriginalExtension();
                $mainFilename = str_random(6).'.'.time();
                $fileA = $fullname.'fileA'.'.'.$ext;
                $file->move($destination, $fileA);
            }
            }


            
            if($request->hasFile('fileB')){
            if (Input::file('fileB')->isValid()) {
                $file = Input::file('fileB');
                $destination = storage_path('/');
                $ext= $file->getClientOriginalExtension();
                $mainFilename = str_random(6).'.'.time();
                $fileB = $fullname.'fileB'.'.'.$ext;
                $file->move($destination, $fileB);
            }
    }
    DB::insert("INSERT INTO `applications`(`full_name`,`app_id`, `user_Id`, `certi_id`, `stat`,`fileA`,`fileB`,`age`,`add`) VALUES ('$fullname',null,14,1,0,'$fileA','$fileB','$email','$con1')");


    
 

    
            $client = new GuzzleHttp\Client();
                            
            $URI = 'http://localhost:3000/api/submitApplication';

            $params['body'] = array(
                '$class'=> "org.unblockcerti.user.application.submitApplication",
                                "applicationId"=> 5,
                                "fullName"=> $request->fullname,
                                "age"=> $request->age,
                                "address"=> $request->add,
                                "document1path"=> $fileA,
                                "document2path"=> $fileB,
                                "status"=> 0,
                                "timestamp"=> date("Y-m-d h:i:s a", time()));
            $response = $client->post($URI, $params);

return redirect('/');

    }
     public function seeAppliedDocsStatus()
    {
        $values = DB::select("select * from applications where `stat = 0");
        return view('seeAppliedDocStatus')->with('values',$values);    
    }
     public function reApply()
    {
        //
    }





}
