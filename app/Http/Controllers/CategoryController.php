<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= Category::all();
         $floor = DB::table('floor')->get();
         $data = array('category' => $category ,
                        'floor' => $floor
        );


        return view("admin.category",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $category  =   new Category;
        $category->floor_id =  $request->floor_id;
        $category->shelf =  $request->shelf;
        $category->call_b =  $request->call_b;
        $category->language =  $request->language;
        $category->save();

        Session::flash('flash_message','เพิ่มข้อมูลสำเร็จ!! ');
        return redirect('category');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('location_book')
        ->where('id', $id)
        ->update(['floor_id' => $request->floor_id, 'shelf' => $request->shelf]);
        Session::flash('flash_message','แก้ไขข้อมูลสำเร็จ!! ');
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('location_book') ->where('id', '=', $id)->delete();
      Session::flash('flash_message','ลบข้อมูลสำเร็จ!! ');
      return redirect('category');
    }









    public function destroych(Request $request)
    {




           if($request->checkBox == 1){

            if( $request->floor_id4 == '' ||  $request->shelf4 == '' || $request->floor_id3 == ''|| $request->shelf3 == '' ){
                $dataerror =[ 'flash' => 'กรุณากรอกให้ครบค่ะ'  ];
            return response()->json([
                'error'    => true,
                'messages' => $dataerror,
            ], 422);

            }
            $countlocation_book = DB::table('location_book')->where('floor_id', $request->floor_id3)->where('shelf', $request->shelf3)->count();
              if($countlocation_book >0   ){

                $countshelf = DB::table('bookshelf')->where('floor', $request->floor_id4)->where('id_shelf', $request->shelf4)->count();

                if( $countshelf >0){

                 DB::table('location_book')->where('floor_id', $request->floor_id3)
                 ->where('shelf', $request->shelf3)
                 ->update(['floor_id' => $request->floor_id4 ,  'shelf' => $request->shelf4]);
                 return response()->json(['error'    => false,], 200);

                } else{
                 $dataerror =[ 'flash' => 'ไม่สามารถย้ายหมวดไปตู้นี้ได้เนื่องจากไม่มีอยู่ในระบบกรุณาเพิ่มตู้! '  ];
                 return response()->json([
                     'error'    => true,
                     'messages' => $dataerror,
                 ], 422);

                }



              }else{
                $dataerror =[ 'flash' => 'ไม่สามารถย้ายหมวดไปตู้นี้ได้เนื่องจากไม่พบข้อมูลหมวดในชั้นเดิมค่ะ'  ];
                return response()->json([
                    'error'    => true,
                    'messages' => $dataerror,
                ], 422);
              }




           }
           else
           {


            if( $request->floor_id2 == '' ||  $request->floor_id == '' || $request->shelf == ''|| $request->call_b == '' || $request->shelf2 == '' ){
                $dataerror =[ 'flash' => 'กรุณากรอกให้ครบค่ะ'  ];
            return response()->json([
                'error'    => true,
                'messages' => $dataerror,
            ], 422);

        }

             $countshelf2 = DB::table('bookshelf')->where('floor', $request->floor_id2)->where('id_shelf', $request->shelf2)->count();
             if( $countshelf2 >0){

                DB::table('location_book')->where('floor_id', $request->floor_id)
                ->where('shelf', $request->shelf)
                ->where('call_b', $request->call_b)
                ->update(['floor_id' => $request->floor_id2 ,  'shelf' => $request->shelf2]);
                return response()->json(['error'    => false,], 200);
             }
              else {
                $dataerror =[ 'flash' => 'ไม่สามารถย้ายหมวดไปตู้นี้ได้เนื่องจากไม่มีอยู่ในระบบกรุณาเพิ่มตู้! '  ];
                return response()->json([
                    'error'    => true,
                    'messages' => $dataerror,
                ], 422);

              }







           }












    }









}
