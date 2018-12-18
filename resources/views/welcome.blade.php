 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
     <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                 <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <title></title>
                 
                <style type="text/css">
                .holder_wrap{
                    position:relative;
                    margin:auto;
                    display:block;
                    height:120px; /* กำหนดความสูงส่วนพื้นที่คลุมเนื้อหาทั้งหมด */
                }
                .holder_wrap_img{
                    position:absolute;/* กำหนดการจัดตำแหน่งส่วนพื้นที่คลุมเนื้อหารุปและข้อความซ้อนทับ */
                }
                .holder_wrap_img img{
                    position:relative;
                    /* กำหนดความสูงส่วนของเนื้อหาที่นำมาซ้อนทับ */
                    left:200px; /* กำหนดความกว้างของเนื้อหาที่นำมาซ้อนทับ แบบขยายเต็ม */
                    top:100px; /* css กำหนดชิดด้านบน  */
                    z-index:999;
                    width:800px  ;
                    height:500px;
                     /* กำหนดการจัดตำแหน่งของรูป */
                }
               
                .inner_position_left{
                    position:absolute;
                    border-radius: 25px;
                    display:block;  
                    background-color:#FF0000;   
                    height:10%;
                    width:7px; 
                    top:445px; 
                    left:614px; 
                    z-index:999;
                    
                }
                
                .inner_position_bottom{
                    position:absolute;
                    border-radius: 25px; 
                    display:block;  
                    background-color:#FF0000;   
                    height:7px; 
                    width:3.5%; 
                    left:614px;
                    bottom:260px; 
                    z-index:999;    
                }
                .inner_position_bottom2{
                    position:absolute;
                    border-radius: 25px; 
                    display:block;  
                    background-color:#FF0000;   
                    height:7px;
                    width:3.5%; 
                    left:614px;
                    bottom:50px; 
                    z-index:999;    
                }
         
                .inner_position_right{
                    position:absolute;
                    display:block; 
                    border-radius: 25px; 
                    background-color:#FF0000;   
                    height:43%;
                    width:7px; 
                    top:235px; 
                    right:157px; 
                    z-index:999;
                }

                .inner_position_locker1{
                    position:absolute;
                    display:block; 
                    background-color:#63320e;   
                    height:60px;
                    width:15px; 
                    top:200px; 
                    right:200px; 
                    z-index:999;
                }

                .inner_position_book1{
                    position:absolute;
                    display:block; 
                    background: url(../../images/icon.png) no-repeat 0px 0px;   
                    height:32px;
                    width:32px; 
                    top:200px; 
                    right:170px; 
                    z-index:999;
                }
                .inner_position_user{
                    position:absolute;
                    display:block; 
                    background: url(../../images/user.png) no-repeat 0px 0px;   
                    height:32px;
                    width:32px; 
                    top:470px; 
                    right:180px; 
                    z-index:999;
                }
                </style>


                </head>
                 
                <body>
                 
                <div class="container">
                <div class="holder_wrap">
                <div class="holder_wrap_img">
                <img src="https://res.cloudinary.com/nio/image/upload/v1542906742/Capture.jpg"  />
                <div class="inner_position_left"></div>
                <div class="inner_position_right"></div>
                <div class="inner_position_bottom"></div>
                <div class="inner_position_bottom2"></div>
              <a href="#"><div class="inner_position_locker1" data-toggle="modal" data-target="#myModal"></div></a>  
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">แสดงรูปหน้าตู้</h4>
        </div>
        <div class="modal-body">
          <p>รูป</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>
      
    </div>
  </div>
                <div class="inner_position_book1"></div>
                <div class="inner_position_user"></div>
                </div>
                </div>
              
               
                 
                    </div>
                </body>
                </html>
         

