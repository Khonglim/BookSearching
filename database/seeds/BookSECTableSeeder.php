<?php

use Illuminate\Database\Seeder;

class BookSECTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_sec')->insert([
            'route_book' => '.inner_position_left{
                position:absolute;
                border-radius: 25px;
                display:block;  
                background-color:#FF0000;   
                height:10%;
                width:7px; 
                top:445px; 
                left:614px; 
                z-index:999;
                
            }',
            'id_book' => '1',
        ]);

        DB::table('book_sec')->insert([
            'route_book' => '.inner_position_bottom{
                position:absolute;
                border-radius: 25px; 
                display:block;  
                background-color:#FF0000;   
                height:7px; 
                width:3.5%; 
                left:614px;
                bottom:260px; 
                z-index:999;    
            }',
            'id_book' => '1',
        ]);


        DB::table('book_sec')->insert([
            'route_book' => '.inner_position_bottom2{
                position:absolute;
                border-radius: 25px; 
                display:block;  
                background-color:#FF0000;   
                height:7px;
                width:3.5%; 
                left:614px;
                bottom:50px; 
                z-index:999;    
            }',
            'id_book' => '1',
        ]);



        DB::table('book_sec')->insert([
            'route_book' => '.inner_position_right{
                position:absolute;
                display:block; 
                border-radius: 25px; 
                background-color:#FF0000;   
                height:43%;
                width:7px; 
                top:235px; 
                right:157px; 
                z-index:999;
            }',
            'id_book' => '1',
        ]);

        DB::table('book_sec')->insert([
            'route_book' => '.inner_position_book1{
                position:absolute;
                display:block; 
                background: url(../../images/icon.png) no-repeat 0px 0px;   
                height:32px;
                width:32px; 
                top:200px; 
                right:170px; 
                z-index:999;
            }',
            'id_book' => '1',
        ]);
       





    }
}
