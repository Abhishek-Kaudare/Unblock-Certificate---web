<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function viewstatus()
    {
        $values = DB::select("select * from users where PRN = 0");
        return view('admin.status')->with('values',$values);    
    }

    


}
