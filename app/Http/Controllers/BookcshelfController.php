<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class BookcshelfController extends Controller
{

    public function index($id){
    $b = $id;
    $bookshelf = DB::table('bookshelf')->where('floor', '=',$id)->get();
    $count= DB::table('bookshelf')->where('floor', '=',$id)->count();

    $data = array('bookshelf' => $bookshelf ,
                          'b' => $b,
                          'count' => $count


                        );


    return view('admin.bookshelf', $data);

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

        foreach ($arr as $p){
		 	// set id, row index and cell index
			$id = $p[0];
			$row = $p[1];
			$cell = $p[2];
			$class = $p[3];
            $text = $p[4];

			// instead of print, you can store accepted parameteres to the database
            DB::insert('insert into bookshelf (row,id_shelf,cell,floor) values ("'.$row.'","'.$text.'","'.$cell.'","'.$f.'")');
            //print "Id=$id Row=$row Cell=$cell Class=$class Text=$text";

        }

        $count= DB::table('bookshelf')->where('floor', '=',$f )->count();
        DB::table('floor')->where('floor_id', $f)->update(['shelf_all' => $count]);

    }


public function locationshow($id,$namebook,$language){
            $cell=$id;
            $namebooks = $namebook;
            $languages =  $language;

            $floor1  =  DB::table('location_book')->where('call_b',$id)->where('language',$languages)->get();

           if(count($floor1) >0 ){
            $bookshelf = DB::table('bookshelf')->where('floor','=',$floor1[0]->floor_id)->get();
            $floor = $floor1[0]->floor_id;
            $locationbook = DB::table('location_book')->where('language',$languages)->get();
            $data = array('bookshelf' =>  $bookshelf,
                            'cell'    =>  $cell,
                       'locationbook' =>  $locationbook,
                         'floor'      =>  $floor,
                      'namebooks'     =>  $namebooks,
                         'floor1'     =>  $floor1

        );
                 return view('locationShow', $data);
           }

           else
           {
                return view('nolocation');
           }
}











public function delete($id)
        {
            $floor = DB::table('bookshelf') ->where('id_shelf', '>', $id)->get();

             DB::table('floor')->where('floor', '=',$id)->delete();
             foreach ($floor as $p){
                DB::table('bookshelf')
                ->where('id_shelf', '=',$p->id_shelf)
                ->update(['id_shelf' =>$p->id_shelf-1]);

            }


            Session::flash('flash_message','ลบข้อมูลสำเร็จ!! ');

             return redirect('home');
        }






    }

