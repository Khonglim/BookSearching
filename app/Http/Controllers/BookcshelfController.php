<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookcshelfController extends Controller
{
    public function index($id){
    $b = $id;
    $codewold = DB::table('bookshelf')->where('floor', '=',$id)->get();
    $data = array('codewold' => $codewold ,'b' => $b );
    return view('bookshelf', $data);

    }


    public function ajaxRequestPost(Request $request)
    {
        $p = stripslashes($request->table_contents);
        $f = $request->floor;
		// decode JSON object (it shouldn't be decoded as associative array)
		$arr = json_decode($p);
        // open loop through each array element
        //DB::delete('delete from bookshelf where floor = ?',[$f]);
        DB::table('bookshelf')->where('floor',$f)->delete();
        DB::statement("ALTER TABLE bookshelf AUTO_INCREMENT =  1");
        $count = 1;
        foreach ($arr as $p){
		 	// set id, row index and cell index
			$id = $p[0];
			$row = $p[1];
			$cell = $p[2];
			$class = $p[3];
			$text = $p[4];
			// instead of print, you can store accepted parameteres to the database
            DB::insert('insert into bookshelf (row,id_shelf,cell,floor) values ("'.$row.'","'.$count.'","'.$cell.'","'.$f.'")');
            //print "Id=$id Row=$row Cell=$cell Class=$class Text=$text";
            $count ++;
		}
    }
        public function locationshow($id){
            $cell=$id;
            $codewold = DB::table('bookshelf')->get();
            $locationbook = DB::table('locationbook')->get();
            $data = array('codewold' =>   $codewold,
                      'cell'    =>      $cell,
                      'locationbook' => $locationbook
        );

           return view('locationShow', $data);
        }



    }

