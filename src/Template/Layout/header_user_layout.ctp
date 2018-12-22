
<!DOCTYPE html>
<html>
<head>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="/img/favicon.JPG">
      <title>Công ty cổ phần sách SkyBooks</title>
      <link href="/css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen"/>
      <link href="/css/sequence-looptheme.css" rel="stylesheet" media="all"/>

      <link href="/css/style1.css" rel="stylesheet">

      <link href="/css/bars-1to10.css" rel="stylesheet">
      <link href="/css/bars-movie.css" rel="stylesheet">
      <link href="/css/css-stars.css" rel="stylesheet">
      <link href="/css/rating.css" rel="stylesheet">
      <link rel="stylesheet" href="/css/jquery.rateyo.min.css" >
      <script type="text/javascript" src="/js/jquery-1.10.2.min.js" ></script>
      <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/js/jquery.sequence-min.js"></script>
      <script type="text/javascript" src="/js/jquery.carouFredSel-6.2.1-packed.js"></script>
      <script defer src="/js/jquery.flexslider.js"></script>
      
      <script type="text/javascript" src="/js/rating.js" ></script>
      <script type="text/javascript" src="/js/jquery.min.js" ></script>
      
      <script type="text/javascript" src="/js/jquery.rateyo.js" ></script>
      
      
      </script>
     

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
                              <ul class="option_nav">
                                
                              </ul>
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
                                    <?php 
                                    if(!$user){ ?>
                                    <li> <?php echo $this->Html->link('Đăng nhập',['quy'=>'dangnhap','id'=>1,'controller'=>'Acounts','action'=>'login'],['escape'=>false]) ?></li>
                                   

                                   <li><a href="/Acounts/dangki" class="">Đăng kí</a></li>

                                   <?php }
                                   else{
                                   ?>
                                   <li style="color: white">Xin chào <?php echo $user['fullname']?></li>
                                     
                                    <li> <?php echo $this->Html->link('Thoát',['quy'=>'dangxuat','id'=>1,'controller'=>'Acounts','action'=>'logout'],['escape'=>false]) ?></li>
                                   <?php } ?>
                                   <!--  <li> <?php //echo $this->Html->link('Tài khoản của tôi',['controller'=>'Bills','action'=>'lichsumuahang'],['escape'=>false]) ?></li> -->

                                  
                                   
                                </ul>
                              
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form method="post" action="/HomeUsers/tim/"><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
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
                                       <div class="image"><?php echo $this->Html->image($value['image_link']); ?></div>
                                       <div class="item-description">
                                          <p class="" style="color: gray!important;font-weight: bold"><?php echo $value['product_name'] ?></p>
                                          <p>Số lượng: <span class="light-red"><?php echo $value['quantity']?></span><br>Giá: <span class="light-red"><?php echo number_format($value['price'],0,"",".");echo "₫"; ?></span></p>
                                       </div>
                                       
                                    </div>
                                 </li>
                                 <?php } ?>

                                 <li><span class="total">Tổng: <strong><?php echo number_format($total,0,"",".");echo "₫"; ?></strong></span><button class="checkout" style = "padding: 5px !important;" onClick="location.href='/Bills/dathang'">Đặt hàng</button></li>
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
         
    <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
    
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
                        <p>Số 334, Nguyễn Trãi, Hà Nội, Việt Nam</p>
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
                        <p>© 2018 Bản quyền thuộc về <a href="#">SkyBooks</a> | Cung cấp bởi OPQ</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
          </div>

    </footer>
    </div>
</body>
</html>
