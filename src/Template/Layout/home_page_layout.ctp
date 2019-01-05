<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
  
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/img/favicon.jpg">
  <title>Công ty cổ phần sách SkyBooks</title>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
  <link href="/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen"/>
  <link href="/css/sequence-looptheme.css" rel="stylesheet" media="all"/>
  <link href="/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="/js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/jquery.sequence-min.js"></script>
  <script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
  <script defer src="/js/jquery.flexslider.js"></script>
  <script type="text/javascript" src="/js/script.min.js" ></script>
  <style>
  .chitiet ul{
    background: #f2f2f2;
    margin: 15px 0px;
    padding: 17px 15px;
    margin-bottom: 40px;

  }
  .chitiet ul li{
    display: inline-block;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    position: relative;
    line-height: 16px;
    color: #444444;
  }
  .carousel-control.left,
.carousel-control.right { 
    margin-right: 40px;
    margin-left: 32px; 
    background-image: none;
    opacity: 1;
    color: black!important;
    font-size: 18px;

}
.carousel-control.left:hover,
.carousel-control.right:hover{
  color: black!important;
  font-size: 20px;


}
#bigsale{
  padding-top: 15px;
  padding-left: 15px;
  font-weight: bold;
  font-size: 16px;
}
#avatar{
 border-radius: 50%;
 border: 1px solid #ddd;
 padding: 5px;
 width: 150px;
 display: block; margin-left: auto; margin-right: auto;
}

.xem{
    color: red;
}
#name{
  padding-left: 70px;
  font-size: 15px;
  font-weight: bold;
}
#idea{
  font-size: 14px;
  font-style: italic;
}
.checkout{
  padding: 5px !important;
}
          
</style>

</head>
<body id="home">
  <div class="wrapper">
  <div class="header">
    <div class="container">
       <div class="row">
          <div class="col-md-2 col-sm-2">
             <div class="logo"><a href="index.html"><img src="/img/logo1.png" alt="FlatShop"></a></div>
          </div>
          <div class="col-md-10 col-sm-10">
             <div class="header_top">
                <div class="row">
                   <div class="col-md-3">
                      <ul class="option_nav"></ul>
                   </div>
                   <div class="col-md-6">
                      <ul class="topmenu">
                         <!-- <li><a href="#">About Us</a></li>
                         <li><a href="#">News</a></li>
                         <li><a href="#">Service</a></li>
                         <li><a href="#">Recruiment</a></li>
                         <li><a href="#">Media</a></li>
                         <li><a href="#">Support</a></li> -->
                      </ul>
                   </div>
                   <div class="col-md-3">
						<ul class="usermenu">
						</ul>
						<ul class="usermenu">
              <?php 
                if(!$user){ ?>
                <li> <?php echo $this->Html->link('Đăng nhập',['quy'=>'dangnhap','id'=>1,'controller'=>'Acounts','action'=>'login'],['escape'=>false]) ?></li>
               

               <li><a href="/Acounts/dangki" class="">Đăng kí</a></li>
               <?php }
               else{
               ?>
               <li style="color: white">Xin chào <?php echo $user['fullname']?></li>
               <li> <?php echo $this->Html->link('Tài khoản của tôi',['controller'=>'Bills','action'=>'lichsumuahang'],['escape'=>false]) ?></li>
               <li> <?php echo $this->Html->link('Thoát',['quy'=>'dangxuat','id'=>1,'controller'=>'Acounts','action'=>'logout'],['escape'=>false]) ?></li>
               <?php } ?>
              </ul>
             </div>
            </div>
             </div>
             <div class="clearfix"></div>
             <div class="header_bottom">
                <ul class="option">
                   <li id="search" class="search">
                       <form method="post" action="/HomeUsers/tim/"><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Nhập để tìm kiếm..." type="text" value="" name="search"></form>
                   </li>
                    <?php 
                      $count = 0;
                      if($cart){
                        foreach ($cart as $key => $value) {
                          $count++;
                        }
                   ?>
                  <li class="option-cart">
                      <a href="#" class="cart-icon">cart <span class="cart_no"><?php echo $count; ?></span></a>
                      <ul class="option-cart-item">
                      <?php foreach ($cart as $key => $value) { ?>
                       <li>
                            <div class="cart-item">
                               <div class="image">
                                 <?php echo $this->Html->image($value['image_link']); ?>
                               </div>
                               <div class="item-description">
                                  <p class="" style="color: gray!important;font-weight: bold"><?php echo $value['product_name'] ?></p>
                                  <p>Số lượng: <span class="light-red"><?php echo $value['quantity']?></span><br>Giá: <span class="light-red"><?php echo number_format($value['price'],0,"",".");echo "₫"; ?></span></p>
                               </div>
                               
                            </div>
                         </li>
                         <?php } ?>
						            <li><span class="total">Tổng: <strong><?php echo number_format($total,0,"",".");echo "₫"; ?></strong></span><button class="checkout" onClick="location.href='/Bills/dathang'">Đặt hàng</button></li>
                      </ul>
                      <?php } ?>
                   </li>
                   
                  
                </ul>
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div class="navbar-collapse collapse">
                   <ul class="nav navbar-nav">
                      <li ><a href="/HomeUsers/index">Trang chủ</a></li>
                      <li><a href="/HomeUsers/giamgia">Chương trình khuyến mãi</a></li>
                      <li><a href="/HomeGioiThieu/index">Giới thiệu</a></li>
                      <li ><a href="/HomeLienhe/index">Liên hệ</a></li>

                    </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>
  <div class="hom-slider">
    <div class="container">
       <div id="sequence">
          <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
          <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
          <ul class="sequence-canvas">
             <li class="animate-in">
                <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">SKYBOOKS</span></div>
                <div class="flat-caption caption2 formLeft delay400 text-center">
                   <h1>Chào mừng bạn</h1>
                </div>
                <div class="flat-caption caption3 formLeft delay500 text-center">
                   <p>Mỗi một cuốn sách sẽ đưa bạn đến một chân trời mới<br>- Robert -</p>
                </div>
                <div class="flat-button caption4 formLeft delay600 text-center"></div>
                <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="/img/d.jpg" alt=""></div> 
             </li>
             <li>
                <div class="flat-caption caption2 formLeft delay400">
                   <h1>THẾ GIỚI SÁCH </h1>
                </div>
                <div class="flat-caption caption3 formLeft delay500">
                   <h2>Thế giới là một cuốn sách và người không <br> đi chỉ đọc được một trang <br></h2>
                </div>
                <div class="flat-button caption5 formLeft delay600"></div>
                <div class="flat-image formBottom delay200" data-bottom="true"><img src="/img/e.png" alt=""></div> 
             </li>
             <li>
                <div class="flat-caption caption2 formLeft delay400 text-center">
                   <h1>SÁCH LÀ BẠN</h1>
                </div>
                <div class="flat-caption caption3 formLeft delay500 text-center">
                   <p>Sách là người bạn đặc biệt, lúc nào cũng sẵn sàng mở lòng với ta... <br>Lúc nào bạn cũng đợi ta ở trên kệ sách.<br> - Eistein -</p>
                </div>
                <div class="flat-button caption4 formLeft delay600 text-center"></div>
                <div class="flat-image formBottom delay200" data-bottom="true"><img src="/img/f.jpg" alt=""></div>
             </li>
          </ul>
       </div>
    </div>
   <div class="promotion-banner">
       <div class="container">
          <div class="row">
             <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="promo-box"><img src="/img/w.PNG" alt=""></div>
             </div>
             <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="promo-box"><img src="/img/o.PNG" alt=""></div>
             </div>
             <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="promo-box"><img src="/img/s.PNG" alt=""></div>
             </div>
          </div>
       </div>
    </div> 

  </div>
  <div class="clearfix"></div>
    <div class="container_fullwidth">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="category leftbar">
            <h3 class="title">
              DANH MỤC SÁCH
            </h3>
            <ul><?php foreach ($list as $v) { ?>
              <li>
                <?php echo $this->Form->postLink($v->catalog_name,['action'=>'loadProductOfCatalog',$v->catalog_id])?>
              </li>
                
              <?php } ?>
            </ul>
          </div>
          <div class="clearfix">
          </div>
         <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <div class="products">

              <p id = "bigsale">
                GIẢM GIÁ ĐẶC BIỆT
              </p>
              <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a> -->
              <div class="carousel-inner">
              <div class="item active">
              <?php foreach ($bestSale3 as $key => $value) { ?>
              <ul>
               
                <div class="thumbnail">
                  <a href="details.html">
                    <?php echo $this->Html->image($value->image_link) ?>       </a>
                </div>
                <div class="productname">
                  <?php echo $value->product_name; ?></div>
                <h4 class="price">
                  <?php echo number_format($value->price-($value->price*$value->discount/100),0,"",".");echo "₫"; ?>    
                </h4>
                
                <div class="button_group">
                <button class="button add-cart" type="button">
                  <a href="/ShopCart/cart/<?php echo $value->product_id ?>">Mua ngay</a></button>
                
                <button class="button compare" type="button">
                  <a href="/DetailProduct/index/<?php echo $value->product_id ?>">Xem</a></button>
                </div>
              </ul>
              <?php } ?>
              </div>
              
              <div class="item">
             <?php foreach ($bestSale2 as $key => $value) { ?>
              <ul>
                <div class="thumbnail">
                  
                  <a href="details.html">
                    <?php echo $this->Html->image($value->image_link) ?>       </a>
                </div>
                <div class="productname">
                  <?php echo $value->product_name; ?></div>
                <h4 class="price">
                  <?php echo number_format($value->price-($value->price*$value->discount/100),0,"",".");echo "₫"; ?>    
                </h4>
                
                <div class="button_group">
                <button class="button add-cart" type="button">
                  <a href="/ShopCart/cart/<?php echo $value->product_id ?>">Mua ngay</a></button>
                
                <button class="button compare" type="button">
                  <a href="/DetailProduct/index/<?php echo $value->product_id ?>">Xem</a></button>
                </div>
              </ul>
              <?php } ?>
              </div>
              <div class="item">
               <?php foreach ($bestSale as $key => $value) { ?>
              <ul>
                <div class="thumbnail">
                  
                  <a href="details.html">
                    <?php echo $this->Html->image($value->image_link) ?>       </a>
                </div>
                <div class="productname">
                  <?php echo $value->product_name; ?></div>
                <h4 class="price">
                 <?php echo number_format($value->price-($value->price*$value->discount/100),0,"",".");echo "₫"; ?>     
                </h4>
                
                <div class="button_group">
               <button class="button add-cart" type="button">
                  <a href="/ShopCart/cart/<?php echo $value->product_id ?>">Mua ngay</a></button>
                
                <button class="button compare" type="button">
                  <a href="/DetailProduct/index/<?php echo $value->product_id ?>">Xem</a></button>
                </div>
              </ul>
              <?php } ?>
              </div>
              </div>
            </div>
          </div>
         
          
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="branch leftbar">
            <h3 class="title">
              Ý KIẾN KHÁCH HÀNG
            </h3>
            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
            <div class="carousel-inner">
            <div class="item active">
            <ul>
              <li>
                <img id = "avatar" src = "/img/ava1.png"></img>
              </li>
              <li>
                <p id = "name" text-align = "center"><strong>BÍCH PHƯƠNG</strong></p>
              </li>
              <li>
                <p id = "idea">" Tư vấn viên rất nhiệt tình, giao hàng nhanh, sách nhận được còn nguyên vẹn, giấy đẹp. Rất hài lòng, sẽ ủng hộ Skybooks lâu dài. "</p>
              </li>
            </ul>
            </div>
            <div class="item">
            <ul>
              <li>
                <img id = "avatar" src = "/img/ava2.png"></img>
              </li>
              <li>
                <p id = "name" text-align = "center"><strong>BẢO ANH</strong></p>
              </li>
              <li>
                <p id = "idea">" Tư vấn viên rất nhiệt tình, giao hàng nhanh, sách nhận được còn nguyên vẹn, giấy đẹp. Rất hài lòng, sẽ ủng hộ Skybooks lâu dài. "</p>
              </li>
            </ul>
            </div>
            <div class="item">
            <ul>
              <li>
                <img id = "avatar" src = "/img/ava3.png"></img>
              </li>
              <li>
                <p id = "name" text-align = "center"><strong>SƠN TÙNG</strong></p>
              </li>
              <li>
                <p id = "idea">" Tư vấn viên rất nhiệt tình, giao hàng nhanh, sách nhận được còn nguyên vẹn, giấy đẹp. Rất hài lòng, sẽ ủng hộ Skybooks lâu dài. "</p>
              </li>
            </ul>
            </div>
             </div>
          </div>
          </div>
          <div class="clearfix">
          </div>
          <!-- <div class="others leftbar">
            <h3 class="title">
              Others
            </h3>
          </div> -->
          <!-- <div class="clearfix">
          </div>
          <div class="others leftbar">
            <h3 class="title">
              Others
            </h3>
          </div> -->
          <div class="clearfix">
          </div>
          
          <div class="clearfix">
          </div>
          <div class="leftbanner">
            <img src="/img/book4.JPG" alt="">
          </div>
        </div>
        <div class="col-md-9">
          <div class="banner">
            <div class="bannerslide" id="bannerslide">
              <ul class="slides">
            <li>
                  <a href="#">
                    <img src="/img/banner-04.jpg" alt=""/>
                  </a>
                </li>
           
                <li>
                  <a href="#">
                    <img src="/img/banner-01.jpg" alt=""/>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="/img/banner-02.jpg" alt=""/>
                  </a>
                </li>
           
              </ul>
            </div>
          </div>
          <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
        
        
      </div>
          <div class="our-brand">
                <div class="chitiet" style="">
                  <ul>
                      <li>
                          ĐỐI TÁC
                      </li>
                  </ul>
                </div>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="/img/1.jpg" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="/img/2.jpg" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="/img/3.jpg" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="/img/4.jpg" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="/img/5.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
    </div>

</div>

    <footer>
        <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="/img/logo1.PNG" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Liên hệ</strong></h4>
                        <p>Số 334, Nguyễn Trãi, Thanh Xuân, Hà Nội, Việt Nam</p>
                        <p>Điện thoại: (+84) 123456789 </p>
                        <p>Email : skybooks@gmail.com</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Chính sách</h4>
                        <ul class="support">
                           <li><a href="#">Chính sách thanh toán</a></li>
                           <li><a href="#">Chính sách đổi trả</a></li>
                           <li><a href="#">Chính sách bảo hành</a></li>
                           <li><a href="#">Chính sách vận chuyển</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Đến với chúng tôi</h4>
                       
                       <p>Đăng kí nhận chương trình ưu đãi</p>
                        <form class="newsletter">
                        <input type="text" name="" placeholder="Nhập email của bạn...">
                        <input type="submit" value="Đăng kí" class="button">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
          
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>© 2018 Bản quyền thuộc về <a href="#">SkyBooks</a> | Cung cấp bởi QTNO</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="" class="linkedin"></a></li>
                           <li><a href="" class="google-plus"></a></li>
                           <li><a href="" class="twitter"></a></li>
                           <li><a href="" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         
      </div>
    </footer>
    
</body>

</html>
