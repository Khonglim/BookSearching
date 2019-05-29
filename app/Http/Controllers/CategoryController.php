<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category= Category::all();
         $data = array('category' => $category  );

        return view("category",$data);
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
    public function store(Request $request)
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
        ->update(['floor_id' => $request->floor_id, 'shelf' => $request->shelf,'call_b' => $request->call_b,'language'=>$request->language]);
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

            DB::table('location_book')->where('floor_id', $request->floor_id3)
            ->where('shelf', $request->shelf3)
            ->update(['floor_id' => $request->floor_id4 ,  'shelf' => $request->shelf4]);
            return redirect('category');
           }else{

            DB::table('location_book')->where('floor_id', $request->floor_id)
            ->where('shelf', $request->shelf)
            ->where('call_b', $request->call_b)
            ->update(['floor_id' => $request->floor_id2 ,  'shelf' => $request->shelf2]);
            return redirect('category');


           }












    }









}
