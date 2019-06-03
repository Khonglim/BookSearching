<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book_SEC;
use Yajra\Datatables\Datatables;
use App\Bookapi;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {




    }

    public function postdata(Request $request){


        $book= Bookapi::all();
        return datatables()->collection($book)->addColumn('action', function ($book) {
            return '<a href="/locationShow/'.$book->callno.'" class="btn btn-danger btn-xs"><i class="fa  fa-map"></i></a>
                ';})->toJson();

    }


    public function updatebookapi()
    {


        $ch = curl_init();
        //$url = "http://202.28.17.35/api4lib/api/index.php/GetListOfItmesFromCallNoRange/%7CaA/%7CaZ/bcm/tha";
          $url = "http://202.28.17.35/api4lib/api/index.php/GetListOfItmesFromCallNoRange/%7CaA/%7CaP/bcm/eng";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = json_decode(curl_exec($ch));
        curl_close($ch);



        $cheng = curl_init();
        $urleng = "http://202.28.17.35/api4lib/api/index.php/GetListOfItmesFromCallNoRange/%7CaA/%7CaZ/bcm/tha";

        curl_setopt($cheng, CURLOPT_URL, $urleng);
        curl_setopt($cheng, CURLOPT_RETURNTRANSFER, 1);
        $outputeng = json_decode(curl_exec($cheng));
        curl_close($cheng);








       $book = $output->ListOfItemsFromCallNoRange;
       $bookeng = $outputeng->ListOfItemsFromCallNoRange;
       Bookapi::truncate();
       foreach ($book as $r) {

           $bookapi = new Bookapi();
           $bookapi->barcode = $r->barcode;
           $bookapi->location_code = $r->location_code ;
           $bookapi->bib_record_id = $r->bib_record_id ;
           $bookapi->item_record_id = $r->item_record_id ;
           $bookapi->best_title = $r->best_title ;
           $bookapi->best_author = $r->best_author ;
            $bookapi->item_status_code = $r->item_status_code ;
            $bookapi->use3_count = $r->use3_count ;
            $bookapi->copy_use_count = $r->copy_use_count ;
            $bookapi->due_gmt = $r->due_gmt ;
            $bookapi->language_code = $r->language_code ;

            $e=explode("|",$r->callno);
            $cut1=substr($e[1],1);

            $bookapi->callno =  $cut1;
            $bookapi->group_code = $r->group_code ;
            $bookapi->class = $r->class ;
          $bookapi->class_x = $r->class_x ;



          $bookapi->save();

      }


      foreach ($bookeng as $r) {

        $bookapi = new Bookapi();
        $bookapi->barcode = $r->barcode;
        $bookapi->location_code = $r->location_code ;
        $bookapi->bib_record_id = $r->bib_record_id ;
        $bookapi->item_record_id = $r->item_record_id ;
        $bookapi->best_title = $r->best_title ;
        $bookapi->best_author = $r->best_author ;
         $bookapi->item_status_code = $r->item_status_code ;
         $bookapi->use3_count = $r->use3_count ;
         $bookapi->copy_use_count = $r->copy_use_count ;
         $bookapi->due_gmt = $r->due_gmt ;
         $bookapi->language_code = $r->language_code ;

         $e=explode("|",$r->callno);
         $cut1=substr($e[1],1);

         $bookapi->callno =  $cut1;
         $bookapi->group_code = $r->group_code ;
         $bookapi->class = $r->class ;
       $bookapi->class_x = $r->class_x ;



       $bookapi->save();

    }
    Session::flash('flash_message',' อัพเดทข้อมูลสำเร็จ! ');
    return redirect('updatedata');

    }




}
