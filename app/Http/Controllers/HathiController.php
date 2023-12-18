<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HathiController extends Controller
{
    public function showUsers(){
        $hathis = DB::table('hathis')->get();
        //return $hathis;

        return view('allusers',['data'=>$hathis]);
    }

    public function singleUser(string $id){
        $hathis = DB::table('hathis')->where('id',$id)->get();
        //return $hathis;

        return view('allusers',['data'=>$hathis]);

    }
}
