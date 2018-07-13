<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNormalList($sql,$data=[]){
        if(!empty($data)){
            $list = DB::select($sql,$data);
        }else{
            $list = DB::select($sql);
        }
        $list = array_map('get_object_vars', $list);
        return $list;
    }
}
