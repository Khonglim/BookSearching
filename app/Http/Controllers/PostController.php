<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class PostController extends Controller

{
    public function postdata()
    {
        $category= Category::all();
        return datatables($category)->addColumn('action', function ($category) {
              return '  <a href="#" data-toggle="modal" data-target="#edit'.$category->id.'" class="btn btn-warning btn-xs"><i  class="fa fa-pencil"  width="15px"></i> แก้ไข</a>
              <div id="edit'.$category->id.'" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg" >
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">แก้ไข</h4>
                          </div>
                          <form action="/update/'.$category->id.'" "method"="PUT" >
                          <div class="modal-body">
                          <div class="form-group">
                  <label for="exampleInputEmail1">ชั้น:</label>
                  <input type="text" class="form-control" id="floor_id"  name="floor_id" placeholder="ชั้น"  value="'.$category->floor_id.'">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ตู้:</label>
                  <input type="text" class="form-control" id="shelf"  name="shelf" placeholder="ตู้"   value="'.$category->shelf.'" >
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">หมวด:</label>
                <input type="text" class="form-control" id="call_b"  name="call_b"   placeholder="หมวด" value="'.$category->call_b.'" >
              </div>
              <br><br>
              <div class="form-group">
                <label for="floor">ภาษา:</label>
                <input type="text" class="form-control" id="call_b"  name="language"   placeholder="ภาษา" value="'.$category->language.'" >
</div>


                          </div>
                          <div class="modal-footer">
                          <button type="submit" class="btn btn-success">บันทึก</button>
                          </form>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                          </div>
                        </div>

                      </div>
                    </div>
                        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delet'.$category->id.'"><i class="fa fa-trash" width="15px"></i>ลบ</a>
                        <div id="delet'.$category->id.'" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">ลบ</h4>
                            </div>
                            <form action="/destroy/'.$category->id.'" "method"="DELETE" >
                            <div class="modal-body">


                             คุณต้องการลบใช่หรือไม่


                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-success">บันทึก</button>
                            </form>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                            </div>
                          </div>

                        </div>
                      </div>

              ';})->toJson();
    }


    public function bookdeletes(Request $request){

        $validator = Validator::make($request->input(), array(
            'shelf' => 'required',

        ));

        if ($validator->fails()) {
            return response()->json([
                'error'    => true,
                'messages' => $validator->errors(),
            ], 422);
        }

        $data =  DB::table('location_book')->where('shelf', '=',$request->shelf)->where('floor_id', '=', $request->floor)->count();

        if ( $data > 0){

            $data =[ 'flash' => 'ไม่สามารถลบตู้นี้ได้ยังมีหมวดหนังสือยู่ชั้นนี้กรุณาย้ายหมวดก่อนค่ะ! '  ];

              return response()->json([
                'error'    => true,
                'messages' => $data,
            ], 422);



          }else{
           $book =  DB::table('bookshelf')->where('id_shelf', '=',$request->shelf)->where('floor', '=', $request->floor)->count();
           if ( $book > 0){
              DB::table('bookshelf')->where('id_shelf', '=',$request->shelf)->where('floor', '=', $request->floor)->delete();
              $count= DB::table('bookshelf')->where('floor', '=',$request->floor)->count();
              DB::table('floor')->where('floor_id', $request->floor)->update(['shelf_all' => $count]);
              return response()->json(['error'    => false,], 200);



           }else{

            $data =[ 'flash' => 'ตู้ที่ท่านเลือกไม่มีอยู่ในระบบค่ะ'  ];

            return response()->json([
              'error'    => true,
              'messages' => $data,
          ], 422);




           }






          }








    }

























}
