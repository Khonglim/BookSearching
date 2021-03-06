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
        $arr = json_decode($p);
        $number = 0;
        $arr_txt_new = array("");
       $x=0;
       $p=0;

        foreach ($arr as $p){
            $arr_txt_new[$number] = $p[3];
            $number ++;
        }

        for ($i=0; $i<count($arr_txt_new); $i++) {
            for ($j=$i+1; $j<count($arr_txt_new); $j++) {

                if( $arr_txt_new[$i] ==  $arr_txt_new[$j]  ){

                    $x =1 ;
                    $p = $arr_txt_new[$i];
                }

            }

          }


          if($x==1){
            $data =[ 'flash' => $p
                                  ];
            return response()->json([
                'error' => true,
                'messages'  => $data
            ], 422);


            }else {


                DB::table('bookshelf')->where('floor',$f)->delete();
                DB::statement("ALTER TABLE bookshelf AUTO_INCREMENT =  1");
               // open loop through each array element
                foreach ($arr as $p){
                     // set id, row index and text
                    $id = $p[0];
                    $row = $p[1];
                    $cell = $p[2];
                    $text = $p[3];

                    // instead of print, you can store accepted parameteres to the database
                    DB::insert('insert into bookshelf (row,id_shelf,cell,floor) values ("'.$row.'","'.$text.'","'.$cell.'","'.$f.'")');
                    //print "Id=$id Row=$row Cell=$cell Class=$class Text=$text";

                }




                $count= DB::table('bookshelf')->where('floor', '=',$f )->count();
                DB::table('floor')->where('floor_id', $f)->update(['shelf_all' => $count]);








            }










    }


public function locationshow(Request $request){
            $cell= $request->callno;
            $namebooks = $request->best_title;
            $languages =  $request->language_code;
            $querys    = $request->query11;

            $floor1  =  DB::table('location_book')->where('call_b',$request->callno)->where('language',$request->language_code)->get();

           if(count($floor1) >0 ){
            $bookshelf = DB::table('bookshelf')->where('floor','=',$floor1[0]->floor_id)->get();
            $floor = $floor1[0]->floor_id;
            $locationbook = DB::table('location_book')->where('language',$request->language_code)->get();
            $data = array('bookshelf' =>  $bookshelf,
                            'cell'    =>  $cell,
                       'locationbook' =>  $locationbook,
                         'floor'      =>  $floor,
                      'namebooks'     =>  $namebooks,
                         'floor1'     =>  $floor1,
                         'querys' =>  $querys

        );
                 return view('locationShow', $data);
           }

           else
           {

            $data = array('querys' =>  $querys);

                return view('nolocation', $data);
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

