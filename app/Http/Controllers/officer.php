<?php

namespace App\Http\Controllers;
use DB;
use App\r;
use Illuminate\Http\Request;
use Response;
use Mail;
use App\Mail\TestEmail;



class officer extends Controller
{
    public function getNewUserApplication()
    {
        $values = DB::select("select * from users where PRN = 0");
        return view('admin.newuserapp')->with('values',$values);    
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
    public function addprof($path){
    

        $fpath = storage_path($path);

        return Response::make(file_get_contents($fpath), 200, [

                'Content-Type'
            => 'application/pdf',

            
            'Content-Disposition' => 'inline; filename="'.$path.'"'

            ]);
     }
     public function idprof($path){

        $fpath = storage_path($path);

        return Response::make(file_get_contents($fpath), 200, [

                'Content-Type'
            => 'application/pdf',

            
            'Content-Disposition' => 'inline; filename="'.$path.'"'

            ]);
     }


    public function accept($userid)
    {   
        $query = "select * from users where user_Id = $userid";
        $values = DB::select($query);
    // print_r($values);
    $id = $values[0]->contact_1;
        $PRN = $id.'#'.substr(mt_rand(), 0, 5);
        DB::statement("UPDATE users SET PRN=$PRN WHERE user_Id=$userid");
        $val = DB::select("select * from users where PRN = 0");
        $em = $values[0]->email;
        
        $to_name = $values[0]->full_name;
        $to_email = (string) $values[0]->email;
        $password = substr($to_name,0,5).substr(sha1(mt_rand()), 9, 11);
        
            $data = ['bmessage' => "Your PRN is $PRN and password is $password, you can change your password"];

            Mail::to($to_email)->send(new TestEmail($data));


        return view('admin.newuserapp')->with('values',$val);
    }
    public function reject($userid)
    {
        DB::statement("UPDATE users SET PRN=99 WHERE user_Id=$userid");
        $values = DB::select("select * from users where PRN = 0");
        // return view('admin.newuserapp')->with('values',$values);    
        return redirect('new-user-application')->with('values',$values);
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
