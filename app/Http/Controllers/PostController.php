<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getUsers()
    {
        $ch = curl_init();

        // set url
        $url = "http://202.28.17.35/api4lib/api/index.php/GetListOfItmesFromCallNoRange/%7CaQA/%7CaQB/bcm";
        // echo $url;
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = json_decode(curl_exec($ch));
        curl_close($ch);
        //print_r($output);
        // echo $output;
        // close curl resource to free up system resources

        $book = $output->ListOfItemsFromCallNoRange;

        foreach ($book as $r) {

            $nestedData['id'] = $r->id;
            $nestedData['item_record_id'] = $r->item_record_id;
            $nestedData['call_number'] = $r->call_number;
            $nestedData['call_number_norm'] = $r->call_number_norm;
            $nestedData['barcode'] = $r->barcode;
            $nestedData['action'] = '
            <a href="#!" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal'.$r->id.'"><i class=" fa fa-trash"></i></button>
            <div id="myModal'.$r->id.'" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">ลบข้อมูล</h4>
                </div>
                <div class="modal-body">
                คุณต้องการลบ   '.$r->call_number_norm.' ใช่หรือไม่!

                </div>
                <div class="modal-footer">
                  <button type="summit" class="btn btn-danger">ลบ</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>

              </div>

            </div>
          </div>
        ';
            $data[] = $nestedData;

        }



        //print_r($count);

        $json_data = array(

            "data" => $data
        );

        echo json_encode($json_data);
        // return view('welcome', $arrayName);
    }
}
