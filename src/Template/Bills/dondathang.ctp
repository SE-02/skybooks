
<head>
    <meta charset="utf-8">
    <link href='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css?20171025' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css?20171025' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/thankyou.css?20180327' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/100/197/269/checkout_stylesheet/517883/checkout.css?1523334346971' rel='stylesheet' type='text/css' />
    <style type="text/css">
         .google{
            width: 100%;
        }
        .google-map{
            width: 100%;
            height: 290px;
            background: #dedede;
        }
        
        body.body {
                font-family:Arial;
                font-size: 13px;
               
                 color: #46484a;
                 background-color: #e6e8ea;

        }
        .container {
            margin-right: 15px;
            margin-left: 15px;
             padding-left: 100px;
            padding-right: 20px;
        }
        .order-summary {
            margin-top: 85px;
            background: #fafafa;
             border-top: 50px solid #e1e1e1;
            color: #777;
             border: 1px solid #dadada;
        }
        .order-summaryy {
            margin-top: 3px;
             background: #CCCCCC;
             border-top: 50px solid #e1e1e1;
            color: #777;
            border: 1px solid #dadada;
        }
          #anh{
            width: 50px;
            height: 50px;
            padding: 3px;

        }
    </style>
</head>
<body class="body ">
    
    <div context="checkout" define="{checkout: new Bizweb.StoreCheckout(this,{})}" class="container">
       
        <div class="main">
            <div class="wrap clearfix">
                <div class="row thankyou-infos">
                    <div class="col-md-7 thankyou-message">
                        
                        <div class="thankyou-message-text">
                            <h3>SkyBooks cảm ơn bạn đã đặt hàng</h3>
                            <p>
                                
                                Hãy luôn cùng Skybooks khám phá thế giới sách.
                                
                            </p>
                            
                        </div>
                    </div>
                   
                   <div class="col-md-5 col-sm-12 order-info" define="{order_expand: false}">
                        <div class="order-summary ">
                            <div class="order-summary-header summary-header--thin summary-header--border">
                                <h2>
                                    <label class="control-label">Đơn hàng</label>
                                
                                </h2>
                                
                            </div>
                            <div class="order-items mobile--is-collapsed" bind-class="{'mobile--is-collapsed': !order_expand}">
                                <div class="summary-body summary-section summary-product">
                                    <div class="summary-product-list">
                                        <ul class="product-list">
                                            <?php foreach ($cart as $key => $value) { ?>
                                               
                                            
                                            <li class="product product-has-image clearfix">
                                                <div class="product-thumbnail pull-left">
                                                    <div class="product-thumbnail__wrapper">
                                                        
                                                        <?php echo $this->Html->image($value['image_link'],['id'=>'anh'])?>
                                                        
                                                    </div>
                                                   
                                                </div>
                                                <div class="product-info pull-left">
                                                    <span class="product-info-name">
                                                        <strong><?php echo $value['product_name']; echo " (".$value['quantity'].")"; ?>
                                                            
                                                        </strong>
                                                        <label class="print">x1</label>
                                                    </span>
                                                    
                                                    
                                                </div>
                                                <strong class="product-price pull-right">
                                                    <?php echo number_format($value['price']*$value['quantity'],0,"","."); echo "₫"?> 
                                                </strong>
                                            </li>
                                            <?php } ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="summary-section  border-top-none--mobile ">
                                <div class="total-line total-line-subtotal clearfix">
                                    <span class="total-line-name pull-left">
                                        Tạm tính
                                    </span>
                                    <span class="total-line-subprice pull-right">
                                        <?php echo number_format($total_bill,0,"","."); echo "₫" ?>
                                    </span>
                                </div>
                                
                                
                                <div class="total-line total-line-shipping clearfix">
                                    <span class="total-line-name pull-left">
                                        Phí vận chuyển
                                    </span>
                                    <span class="pull-right">
                                        
                                        Thu khi giao hàng
                                        
                                    </span>
                                </div>
                                
                                
                            </div>
                            <div class="summary-section">
                                <div class="total-line total-line-total clearfix">
                                    <span class="total-line-name total-line-name--bold pull-left">
                                        Tổng cộng
                                    </span>
                                    <span class="total-line-price pull-right">
                                        <?php echo number_format($total_bill,0,"","."); echo "₫" ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-12 customer-info">
                        
                        <div class="google">
                        <div class="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59870.1318631736!2d105.78120835759483!3d20.964284697487496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad22268ff45d%3A0x361a308fa028101!2zQ-G7rWEgaMOgbmcgU8OhY2ggR2nDoW8gZOG7pWM!5e0!3m2!1svi!2s!4v1521534329605" width="100%" height="290" frameborder="0" style="border:0" allowfullscreen></iframe>
                           
                        </div>
                    </div>
                        <div class="shipping-info">
                            <div class="row">
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="order-summaryy order-summary--white no-border no-padding-top">
                                        <div class="order-summary-header">
                                            <h2>
                                                <label class="control-label">Thông tin nhận hàng</label>
                                            </h2>
                                        </div>
                                        <div class="summary-section no-border no-padding-top">
                                            <p class="address-name">
                                               <?php 
                                                    if(!$info['name_user_rc']){
                                                        echo $info['name_user'];
                                                    }
                                                    else{
                                                        echo $info['name_user_rc'];
                                                    }
                                               ?>
                                            </p>
                                            <p class="address-address">
                                                 <?php 
                                                    if(!$info['phone_rc']){
                                                        echo $info['phone'];
                                                    }
                                                    else{
                                                        echo $info['phone_rc'];
                                                    }
                                               ?>
                                            </p>
                                            
                                            
                                            <p class="address-phone">
                                                <?php echo "Hình thức: Giao hàng tận nơi" ;?>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6">
                                    
                                    <div class="order-summaryy order-summary--white no-border">
                                        <div class="order-summary-header">
                                            <h2>
                                                <label class="control-label">Thông tin đặt hàng</label>
                                            </h2>
                                        </div>
                                        <div class="summary-section no-border no-padding-top">
                                            <p class="address-name">
                                                <?php echo $info['name_user'] ?>
                                            </p>
                                            <p class="address-address">
                                                <?php echo $info['phone'] ?>
                                            </p>
                                            
                                            
                                            <p class="address-phone">
                                                
                                            <?php echo "Trạng thái: Đặt hàng thành công"?>
                                            </p>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                        </div>
                        <div class="order-success unprint">
                            <a href="/HomeUsers/index" class="btn btn-primary">
                                Tiếp tục mua hàng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
</body>
</html>