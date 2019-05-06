<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Codewold;

class CodewoldController extends Controller
{



    public  function  index(){

         $codewold = DB::table('images') ->orderBy('img_order', 'ASC')

         ->get();

        $data = array('codewold' => $codewold);

        return view('booksearching/index', $data);

    }
    public function ajaxRequestPost(Request $request)

    {

        $idArray = explode(",", $request->ids);
        $count = 1;
        foreach ($idArray as $id){

            DB::update('update images set img_order = '.$count.', modified = NOW() WHERE id = '.$id.'');

            $count ++;
     }



    }

}
