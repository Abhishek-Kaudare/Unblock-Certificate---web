<?php
use GuzzleHttp\Client;
namespace App\Http\Controllers;
use DB;
use App\r;
use Illuminate\Http\Request;
use Response;
use Mail;
use App\Mail\TestEmail;
// require 'vendor/autoload.php';
use GuzzleHttp\Client;


use GuzzleHttp;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

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
        return view("appliedForA");
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

            $client = new GuzzleHttp\Client();
                            
            $URI = 'http://localhost:3000/api/addUser';

            $params['body'] = array('$class'=> "org.unblockcerti.participant.user.addUser",
                                "userName"=> $values[0]->full_name,
                                "phoneNo"=> $values[0]->contact_1,
                                "address"=> $values[0]->email,
                                "prn"=> $PRN,
                                "timestamp"=> date("Y-m-d h:i:s a", time()));
            $response = $client->post($URI, $params);
            return redirect('new-user-application')->with('values',$values);

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
    public function viewB($path)
    {
        $fpath = storage_path($path);

        return Response::make(file_get_contents($fpath), 200, [

                'Content-Type'
            => 'application/pdf',

            
            'Content-Disposition' => 'inline; filename="'.$path.'"'

            ]);
    }
    public function viewA($path)
    {
        $fpath = storage_path($path);

        return Response::make(file_get_contents($fpath), 200, [

                'Content-Type'
            => 'application/pdf',

            
            'Content-Disposition' => 'inline; filename="'.$path.'"'

            ]);
    }
    public function acceptDoc($appid,$userid)
    {
        

        $query = "select * from users where user_Id = $userid";
        $values = DB::select($query);
        $id = $values[0]->contact_1;
        $PRN = $id.'#'.substr(mt_rand(), 0, 5);
        DB::statement("UPDATE applications SET stat=1 WHERE user_Id=$userid AND app_id = $appid");
        $val = DB::select("select * from users where PRN = 0");
        $em = $values[0]->email;
        
        $to_name = $values[0]->full_name;
        $to_email = (string) $values[0]->email;
        $password = substr($to_name,0,5).substr(sha1(mt_rand()), 9, 11);
        
            $data = ['bmessage' => "Your Document Is Approved "];

            Mail::to($to_email)->send(new TestEmail($data));


        $f = DB::select("select * from applications where stat = 0");
    

        

        $client = new GuzzleHttp\Client();
                            
            $URI = 'http://localhost:3000/api/addCerti';

            $params['body'] = array('$class'=> "org.unblockcerti.user.certificate.addCerti",
                                "certiId"=> 1,
                                "applicationId"=> $appid,
                                "field1"=> $f[0]->fileA,
                                "field2"=> $f[0]->fileB,
                                "timestamp"=> date("Y-m-d h:i:s a", time()));
            $response = $client->post($URI, $params);

            {

}


        return redirect('application-for-docA')->with('values',$f);


    }
    public function rejectDoc($appid,$userid)
    {
         DB::statement("UPDATE applications SET stat=99 WHERE user_Id=$userid AND app_id = $appid");
        $values = DB::select("select * from applications where stat = 0");
        // return view('admin.newuserapp')->with('values',$values);    
        return redirect('application-for-docA')->with('values',$values);
    }
    public function appliedForA()

    {
         $values = DB::select("select * from applications where stat = 0");
        return view('appliedForA')->with('values',$values);    
        
    }
}
