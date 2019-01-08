<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <style type="text/css">
        .lienhe{
            width: 1200px;
            margin-right: auto;
            margin-left: auto;
           
        }
        .google{
            width: 100%;
        }
        .google-map{
            width: 100%;
            height: 450px;
            background: #dedede;
        }
        .trangchu ul{
            background: #f2f2f2;
            margin: 15px 0px;
            padding: 12px 15px;
            margin-bottom: 60px;

        }
        .trangchu ul li{
            display: inline-block;
            font-size: 12px;
            text-transform: uppercase;
            position: relative;
            line-height: 16px;
            font-weight: normal;
            color: #e66430;
        }
        .trangchu ul li a{
            color: #444;
            background: url(//bizweb.dktcdn.net/100/197/269/themes/517883/assets/icon_breadcrumb.png?1521102652214) center right no-repeat;
            padding-right: 15px;
            background-size: 8px;
            line-height: 20px;
        }
        h4{
            text-transform: uppercase;
            margin-top: 60px;
            color: #252525;
            font-size: 20px;
            font-weight: 450;
            font-family: inherit;
            margin-bottom: 40px;
        }
        .body-left{
            width: 58.3%;
            height: 100%;
            padding:0px;
            float: left;
            margin-top: 45px;
            background: #fff;
        }
        .body-right{
            width: 41.6%;
            height: 600px;
        
            float: right;
            margin-top: 52px;
            padding-left: 20px;
            padding-right: 15px;
            color: #666666;
            font-weight: 380;
        }
        #img1{
            vertical-align: middle; 
            max-width: 100%;
            height: 110px;
            
        }
        #a1{
            background: #5882FA;
        }
        #formlienhe1{
            width: 98%;
            height: 37px !important;
            padding: 6px 12px;
            font-size:14px;
            margin-top: 10px;
            margin-bottom:15px;
            border: 1.5px solid #ccc !important;
            border-radius: 0px;
           
        }
        #formlienhe2{
            width: 98%;
            height: 140px !important;
            padding: 6px 12px;
            font-size:14px;
            margin-top: 10px;
            margin-bottom:15px;
            border-radius: 0px;
            border: 1.5px solid #ccc !important;
           
        }
        .fa1{
            font: normal normal normal 14px/1 FontAwesome;
        }
        label{
            font-size: 16px;font-weight: 400;
        }
        .button1{
            margin: 15px 0;border-radius: 0px;padding: 20px 40px;background:#8c8888;color:#fff;border:none;text-transform: uppercase;
        }
        .button1:hover{
            color: #fff;
            border: 1px solid #eee832;
        }
    </style>
</head>

<body id="home">
    
            <div class="clearfix">
            <div class="container_fullwidth">
            <div class="lienhe">
            <div class="trangchu" style="">
            <ul>
                <li>
                    <a href="/HomeUsers/index">Trang chủ</a>
                </li>
                <li>
                    <strong>LIÊN HỆ</strong>
                </li>
            </ul>
           </div>
            <div class="google">
            <div class="google-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59870.1318631736!2d105.78120835759483!3d20.964284697487496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad22268ff45d%3A0x361a308fa028101!2zQ-G7rWEgaMOgbmcgU8OhY2ggR2nDoW8gZOG7pWM!5e0!3m2!1svi!2s!4v1521534329605" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <br>
                <small><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+Khoa+h%E1%BB%8Dc+T%E1%BB%B1+nhi%C3%AAn/@20.9956733,105.8068612,14.89z/data=!4m5!3m4!1s0x0:0xd740a66998e1a0ed!8m2!3d20.996017!4d105.807959" style="color:#0000FF;text-align:left">View Larger Map</a></small>

            </div>
            </div>
            
            <div class="body-left">
                <h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>

                <?php echo $this->Form->create($post) ?>
                <?= $this->Form->control('fullname',['type'=>'text','label'=>'Họ và tên *','id'=>'formlienhe1',]) ?>
                
                 <?= $this->Form->control('email',['type'=>'email','label'=>'Địa chỉ email *','id'=>'formlienhe1',]) ?>

                 <?= $this->Form->control('comment',['type'=>'textarea','label'=>'Viết bình luận *','id'=>'formlienhe2',]) ?>

                
                 <?= $this->Form->button(__('Gửi liên hệ'),['type'=>'submit','class'=>'button1'])?> 
                
                <?= $this->Form->end() ?>   

            </div>
            <div class="body-right">
                <a href="/HomeUsers/index/">
                    <img id="img1" src="/img/skybooks.PNG" alt="">
                </a>
                <p style="font-size:16px; padding-left: 12px;padding-right: 15px; margin-bottom: 10px; margin-top:13px;line-height: 1.42857143;font-weight: 390;">
                    Công ty cổ phần Sách Sky (Sky Books Joint-Stock Company – gọi tắt là Sky Books) do một nhóm trí thức trẻ thành lập ở Hà Nội năm 2005 với niềm tin: Tri thức là Sức mạnh. Thông qua việc giới thiệu các tác phẩm có giá trị của thế giới, Sky Books mong muốn trở thành nhịp cầu nối nguồn tri thức nhân loại với dân tộc Việt Nam.
                </p>
                <br>
                <ul>
                <li style="line-height: 25px;font-size: 15px;padding-left: 15px;margin-bottom: 10px; ">
                    <i style="color:#ffd800;width: 20px;" class="fa fa-map-marker"></i>
                    42 Cầu Biêu, Tân Trì, Hà Nội
                </li>

                <li style="line-height: 25px;font-size: 15px;padding-left: 15px;margin-bottom: 10px;">
                    <i style="color:#ffd800;width: 20px;" class="fa fa-mobile"></i>
                    0932 329 959
                </li>

                <li style="line-height: 25px;font-size: 15px;padding-left: 15px;margin-bottom: 10px;">
                    <i style="color:#ffd800;width: 20px;" class="fa fa-envelope-o"></i>
                    info@skybooks.vn
                </li>
                </ul>
            </div>
            </div>
            </div>
            </div>
            <footer>
                
            </footer>
            

</body>

