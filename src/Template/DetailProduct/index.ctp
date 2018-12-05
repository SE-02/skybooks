<body>
  <link rel="stylesheet" href="/css/jquery.rateyo.min.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
a:hover{
  color: black!important;

}
.right{
  font-size: inherit;
  padding-left: 750px;
  
}
.right1{
  
  font-size: inherit;
  padding-top: 15px;
  padding-left: 20px;


}
                    
.col-centered {
    float: none;
    margin: 0 auto;
}

.carousel-control { 
    width: 8%;
    width: 0px;
}
.carousel-control.left,
.carousel-control.right { 
    margin-right: 40px;
    margin-left: 32px; 
    background-image: none;
    opacity: 1;
}
.carousel-control > a > span {
    color: white;
    font-size: 29px !important;
}

.carousel-col { 
    position: relative; 
    min-height: 1px; 
    padding: 5px; 
    float: left;
 }

 .active > div { display:none; }
 .active > div:first-child { display:block; }

.block {
  width: 306px;
  height: 230px;
}
#noidung{
  height: 50px;
}
#avatar{
 border-radius: 50%;
 border: 1px solid #ddd;
 padding: 5px;
 width: 40px;
 /*display: block; margin-left: auto; margin-right: auto;*/
}
#bluan{
  display: -webkit-inline-flex; /* Safari */
  display: inline-flex;
  -webkit-flex-direction: row; /* Safari */
  flex-direction:         row;
}

</style>
<div class="wrapper">
      
      <div class="clearfix">
      </div>
      <?php foreach ($list as $v) { ?>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="lienhe">
            <div class="trangchu" style="">
            <ul>
                <li>
                    <a href="/HomeUsers/index">Trang chủ</a>
                </li>
                <li>
                    <strong>Chi tiết sách</strong>
                </li>
                <li>
                  <strong><?php echo $v->product_name?></strong>
                </li>
            </ul>
           </div>
          </div>
          
          
          <div class="row">
            <div class="col-md-9">
              <div class="products-details">
                <div class="preview_image">
                  <div class="preview-small">
                    <img id="zoom_03" src="images/products/medium/products-01.jpg" data-zoom-image="images/products/Large/products-01.jpg" alt="">
                    <?php echo $this->Html->image($v->image_link,['class'=>"anh"]) ?>
                    <style type="text/css">
                      .anh{
                        width: 90%;
                        text-align: center;
                        display: block; 
                        margin-left: auto; 
                        margin-right: auto;
                      }
                    </style>
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="#" data-image="images/products/medium/products-01.jpg" data-zoom-image="images/products/Large/products-01.jpg">
                          
                          <?php echo $this->Html->image($v->image_link) ;?>
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/products/medium/products-02.jpg" data-zoom-image="images/products/Large/products-02.jpg">
                          <img src="images/products/thum/products-02.png" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/products/medium/products-03.jpg" data-zoom-image="images/products/Large/products-03.jpg">
                          <img src="images/products/thum/products-03.png" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/products/medium/products-04.jpg" data-zoom-image="images/products/Large/products-04.jpg">
                          <img src="images/products/thum/products-04.png" alt="">
                        </a>
                      </li>
                     
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="products-description">
                  <h3 class="name">
                    <?php echo $v->product_name; ?>
                  </h3>
            
                  <p>
                    <b>Tình trạng: </b>
                    <span class="light-red">
                      Còn hàng
                    </span>
                  </p>
                  <p>
                    <b>Giá bìa:</b> 
                    <strike class = "price"><?php echo number_format($v->price,0,"","."); ?>₫</strike>

                  </p>
                  <p>
                    <b>Giá đang giảm:</b>
                    <span class="discount">
                    <?php echo number_format(($v->price-($v->price*($v->discount/100))),0,"",".")?>₫

                    </span>
                  </p>
                  <p >
                    <b>Tiết kiệm: </b>
                    <span class="save">
                    <?php echo number_format(($v->price*($v->discount/100)),0,"",".")?>₫
                    </span>
                  </p>
                  <style>
                    b{
                      color: #999;
                      font-weight: 700;

                    }
                    .light-red{
                      font-size: 14px;
                      color:#F47920;
                    }
                    .price{
                      font-size:17px;
                    }
                    .discount{
                      font-size: 17px;
                      color:#F47920;
                      font-weight: 600;
                    }
                    .save{
                      font-size: 16px;
                      color: #999;
                    }
                    .descrip{
                      color: #999;
                      font-size: 13px;
                      line-height: 20px;
                      margin-top:10px;

                    }
                    p{
                      margin: 0 0 10px;
                    }
                    body{
                      font-family: Arial;
                    }

                  </style>
                  <p class="descrip">

                    <?php echo $v->description?>
                  </p>
                  <hr class="border">
                  
                  <div class="wided">
                    <div class="qty">
                     <!--  <input type="number" title="Số lượng" min="1" value="1" maxlength="12" id="" name="quantity" class="input-text qty"> -->
                    </div>
                    <div class="button_group">
                      <button class="button" >
                        <?php echo $this->Html->link('Thêm vào giỏ hàng',['method'=>'post','type'=>'submit','controller'=>'ShopCart','action'=>'cart',$v->product_id]) 
                          ?>
                      </button>
                      <button class="button compare">
                        <i class="fa fa-exchange">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-envelope-o">
                        </i>
                      </button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#Descraption">
                        Giới thiệu sách 
                      </a>
                    </li>
                    
                    
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
                      <?php echo $v->description; ?>

                    </p>
                    <p >
                      <em><strong class="hl">Skybooks trân trọng giới thiệu cùng bạn đọc!</strong></em>
                    </p>
                    <style>
                      .tab-content{
                        font-family: Arial;
                      }
                      .hl{
                        font-weight: 700;
                        color: #666666;
                        font-style:italic;
                        font-size:14px;
                        margin-top: 40px;
                        font-family: Arial;
                      }
                    </style>
                    <div class="danhgia">
                      Đánh giá sản phẩm
                    </div>

                    <style type="text/css">
                      .danhgia{
                        margin-top: 40px;
                        font-size: 20px;
                        color:#666666;
                        font-weight: 400;
                        font-family: Arial;
                      }
                      .cm{
                        margin-top:13px;
                      }
                      hr{
                        color: #666666;
                      }
                     #btnnewreview {
                        padding: 10px;
                        margin-left: 729px;
                        border: 0;
                        background: #53a1cc;
                        color: #fff;
                    }
                    input, button{
                        font-family: inherit;
                        font-size: inherit;
                        line-height: inherit;
                    }
                    </style>
                    <hr>

                  <?php if(!$user){ ?>
                    <?php echo $this->Html->link('Đăng nhập để viết đánh giá',['quy'=>'product-detail','id'=>$v->product_id,'controller'=>'Acounts','action'=>'login']) ?>
                    <!-- <a href="/Acounts/login" >Đăng nhập để viết đánh giá</a> -->
                  
                  <?php }
                  else { ?>
                  <input type="button" onclick="" id="btnnewreview" data-toggle="modal" data-target="#myModal" value="Viết đánh giá">
                  <?php } ?>
                  <form action="/DetailProduct/comment/<?php echo $v->product_id ?>" method= "POST">
                    
                    <?php foreach ($listComment as $key => $value) { ?>
                    <hr>
                    <div id = "loadComment">
                      <div id = "bluan">
                        <div><img id = "avatar" src = "/img/ava3.png"></div>
                        <div><span id = "ten" style="padding-left: 20px;font-size: 15px; color: gray"><?php echo $value['acounts']['fullname']?></span>
                        <p style="padding-left: 20px;padding-top: 4px;"><?php echo date("d/m/20y",strtotime($value->created_at));?></p></div>
                      </div>
                      <div id = "tieude">
                        <p style="padding-left: 25px; font-size: 15px; color: gray; font-weight:bold;"><?php echo $value->title; ?>
                        </p>
                      </div>
                      <div id = "nhanxet"><p style="padding-left: 25px;"><?php echo $value->comment; ?></p></div>
                    </div>
                   <?php } ?>
                    <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="">
                          <button type="button" class="close" data-dismiss="modal"></button>
                          <h4 id = "danhgia" class="modal-title">Đánh giá</h4>
                        </div>
                          <div id = "sao" class="modal-body">
                          <div id ="rateYo" class="dg"></div>
                            <script type="text/javascript">
                              $(function () {
                                $("#rateYo").rateYo({
                                  rating: 1
                                });
                              });
                              $(function () {
                                var $rateYo = $("#rateYo").rateYo();
                                $("#rateYo").click(function () {
                                  /* get rating */
                                  var rating = $rateYo.rateYo("rating");
                                  console.log(rating);
                                  $('#star').val(rating);
                                  // window.alert("Its " + rating + " Yo!");
                                });
                                $("#setRating").click(function () {
                                  /* set rating */
                                  var rating = getRandomRating();
                                  $rateYo.rateYo("rating", rating);
                              });
                            });
                          </script>
                            <input type = "hidden" id="star" name="sosao"></input>
                            <input type = "hidden" id = "product_id" name = "product_id" value = ""></input>
                           
                            <input type="text" name="title" value="" placeholder="Tiêu đề" class="cm">
                            <input id = "noidung" type="text"  name="content" value="" placeholder="Nội dung" class="cm">
                            <button type="submit" class="btn guinhanxet">Gửi</button>
                            <!-- <a id="testajax">TestAjax</a> -->
                          </div>
                        </div>
                      </div>
                  </div>
                </form>
             <?php } ?> 

                </div>
                </div>

              </div>
              


              <div class="clearfix">
              </div>
              <div class="clearfix">
              </div>
              <div class="clearfix">
              </div>
              <div class="clearfix">
              </div>
             <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div id="productsDetails" class="">
                  <div class="chitiet" style="">
                    <ul>
                        <li>
                            SÁCH CÙNG LOẠI
                        </li>
                         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                          <i class="fa fa-angle-left"></i>
                        </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                           <!--  <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span> -->
                             
                              <i class="fa fa-angle-right"></i>
                              
                          </a>
                        
                       
                    </ul>
                  </div>
                  <div class="carousel-inner">
                    <div class="item active">
                      <ul id="hot">
                        <li>
                          <div class="row">
                          <?php foreach ($list_product_catalog as $l) { ?>
                            <div class="col-md-4 col-sm-4">
                              <div class="products">
                                <div class="offer">
                                  <?php echo $l->discount; ?>%
                                </div>
                                <div class="thumbnail">
                                  <?php echo $this->Html->image($l->image_link); ?>
                                </div>
                                <div class="productname">
                                  <?php echo $l->product_name; ?>
                                </div>
                                <h4 class="price">
                                  <?php echo number_format($l->price,0,"","."); ?>₫
                                </h4>
                                <div class="button_group">
                                  <button class="button add-cart" type="button">
                                    <?php echo $this->Html->link('Mua ngay',['method'=>'post','type'=>'submit','controller'=>'ShopCart','action'=>'cart',$v->product_id]) 
                                    ?>
                                  </button>
                                  <button class="button compare" type="button">
                                    <?php echo $this->Html->link('Xem',['type'=>'button','class'=>'xem','controller'=>'DetailProduct','action'=>'index',$v->product_id]) 
                                    ?>
                                  </button>
                                  <button class="button wishlist" type="button">
                                    <i class="fa fa-heart-o">
                                    </i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          <?php } ?>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- cho nay -->
                    <div class="item">
                      <ul id="hot">
                        <li>
                          <div class="row">
                          <?php foreach ($list_product_catalog2 as $l) { ?>
                            <div class="col-md-4 col-sm-4">
                              <div class="products">
                                <div class="offer">
                                  <?php echo $l->discount; ?>%
                                </div>
                                <div class="thumbnail">
                                  <?php echo $this->Html->image($l->image_link); ?>
                                </div>
                                <div class="productname">
                                  <?php echo $l->product_name; ?>
                                </div>
                                <h4 class="price">
                                  <?php echo number_format($l->price,0,"","."); ?>₫
                                </h4>
                                <div class="button_group">
                                  <button class="button add-cart" type="button">
                                    <?php echo $this->Html->link('Mua ngay',['method'=>'post','type'=>'submit','controller'=>'ShopCart','action'=>'cart',$v->product_id]) 
                                    ?>
                                  </button>

                                  <button class="button compare" type="button">
                                    <?php echo $this->Html->link('Xem',['type'=>'button','class'=>'xem','controller'=>'DetailProduct','action'=>'index',$v->product_id]) 
                                    ?>
                                  </button>
                                  <button class="button wishlist" type="button">
                                    <i class="fa fa-heart-o">
                                    </i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          <?php } ?>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="item">
                      <ul id="hot">
                        <li>
                          <div class="row">
                          <?php foreach ($list_product_catalog3 as $l) { ?>
                            <div class="col-md-4 col-sm-4">
                              <div class="products">
                                <div class="offer">
                                  <?php echo $l->discount; ?>%
                                </div>
                                <div class="thumbnail">
                                  <?php echo $this->Html->image($l->image_link); ?>
                                </div>
                                <div class="productname">
                                  <?php echo $l->product_name; ?>
                                </div>
                                <h4 class="price">
                                  <?php echo number_format($l->price,0,"","."); ?>₫
                                </h4>
                                <div class="button_group">
                                  <button class="button add-cart" type="button">
                                    Mua ngay
                                  </button>

                                  <button class="button compare" type="button">
                                    <?php echo $this->Html->link('Xem',['type'=>'button','class'=>'xem','controller'=>'DetailProduct','action'=>'index',$v->product_id]) 
                                    ?>
                                  </button>
                                  <button class="button wishlist" type="button">
                                    <i class="fa fa-heart-o">
                                    </i>
                                  </button>
                                </div>
                              </div>
                            </div>
                          <?php } ?>
                          </div>
                        </li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="">
                  <div class="lienhe">
                    <div class="chitiet" style="">
                      <ul>
                          <li>
                              SÁCH CÙNG TÁC GIẢ
                          </li>
                          <!-- <li>
                            <div class="right">
                            <i class="fa fa-angle-left"></i>
                            </div>
                          </li>
                          <li>
                            <div class="right1">
                            <i class="fa fa-angle-right"></i>
                            </div>
                          </li> -->
                      </ul>
                    </div>
                    

                  </div>
                  
               
                <ul id="hot">
                  <li>
                    <div class="row">
              
                      
                      <?php foreach ($list_product_author as $v) {
                        
                      ?>
                      <div class="col-md-4 col-sm-4">
                        <div class="products">
                          <div class="offer">
                            <?php echo $v->discount;?>%
                          </div>
                          <div class="thumbnail">
                            <?php echo $this->Html->image($v->image_link); ?>
                          </div>
                          <div class="productname">
                            <?php echo $v->product_name;?>
                          </div>
                          <h4 class="price">
                            <?php echo number_format($v->price,0,"","."); ?>₫
                          </h4>
                          <div class="button_group">
                            <button class="button add-cart" type="button">
                              <?php echo $this->Html->link('Mua ngay',['method'=>'post','type'=>'submit','controller'=>'ShopCart','action'=>'cart',$v->product_id]) 
                              ?>
                        </button>
                            <button class="button compare" type="button">
                              <?php echo $this->Html->link('Xem',['type'=>'button','class'=>'xem','controller'=>'DetailProduct','action'=>'index',$v->product_id]) 
                              ?>
                            </button>
                            <button class="button wishlist" type="button">
                              <i class="fa fa-heart-o">
                              </i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <?php }?>
                    </div>
                  </li>
                </ul>
              </div>
             

            </div>
            <div class="col-md-3">
             

         <div class="category leftbar">
                <h3 class="title">
                  DANH MỤC SÁCH
                </h3>
                <ul>
                <?php foreach ($list_catalog as $c) { ?>
                  <li>
                    <a href="#">
                      
                      <?php echo $this->Form->postLink($c->catalog_name,['controller'=>'HomeUsers','action'=>'loadProductOfCatalog',$c->catalog_id])?>

                    </a>
                  </li>
                <?php } ?>  
                  
                  
                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  LIÊN HỆ
                </h3>
                <p>
                  Nhận thông tin mới nhất.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Nhập email...">
                  <input class="submit" type="submit" value="Đăng kí">
                </form>
              </div>
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <img src = "/img/banner_blog_left.jpg"> </img>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          
          <div class="our-brand">
            <div class="lienhe">
              <div class="chitiet" style="">
                <ul>
                    <li>
                        ĐỐI TÁC
                    </li>
                    
                </ul>
              </div>
            </div>
           
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="/img/1.jpg" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="/img/2.jpg" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="/img/3.jpg" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="/img/4.jpg" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="/img/5.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  
                  
                  
                  
                  
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>

    </div>
    <script type="text/javascript" src="/js/jquery.min.js" ></script>
      
    <script type="text/javascript" src="/js/jquery.rateyo.js" ></script>
    </body>
    <style>
    lienhe{
            width: 1200px;
            margin-right: auto;
            margin-left: auto;
          }

    .trangchu ul{
            background: #f2f2f2;
            margin: 15px 0px;
            padding: 12px 15px;
            margin-bottom: 40px;

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
        .add-cart{
          color: black;
        }
        #danhgia{
          text-align: center;
          margin-top:25px;
        }
        #sao{
          text-align: center;
          color:rgb(255, 204, 51);
          height: 70px;

        }
        .guinhanxet{
          text-align: center;
          background: blue;
          color: white;
          margin-bottom: 20px;
          margin-top:20px;
        }
        .nx{
          padding-left: 270px;
        }
        .dg{
          padding-left: 80px;
        }
        .modal-content{
          background: #F2F2F2;
          height: 370px;
          width: 350px;
        }
        .nhapdanhgia{
          width: 300px;
        }

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
                     
                  
</style>
