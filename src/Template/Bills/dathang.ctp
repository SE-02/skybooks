
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="anyflexbox boxshadow display-table">
<head>
  
    <link href='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/nprogress.css' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/checkout.css' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/100/197/269/checkout_stylesheet/517883/checkout.css?1522633246107' rel='stylesheet' type='text/css' />
    <style type="text/css">
        .button12{
         
            border: 1px solid #0033FF;
            font-size: 15px;
            padding: 5px;
            color: white;
            background: #0033FF
          
        }
        #anh{
            width: 50px;
            height: 50px;
            padding: 3px;

        }
    </style>
</head>

<body class="body--custom-background-color ">
   
   
    <form method="POST" action="/Bills/bill" data-toggle="validator" class="content stateful-form formCheckout" >
        <div class="wrap" context="checkout" define='{checkout: new Bizweb.StoreCheckout(this,{ token: "ebafc39d66f046e9af1747bbe8486f5a", email: "", totalOrderItemPrice: 215200.0000, shippingFee: 0, freeShipping: false, requiresShipping: true, existCode: false, code: "", discount: 0, settingLanguage: "vi", moneyFormat: "{{amount_no_decimals_with_comma_separator}}₫", discountLabel: "Miễn phí", districtPolicy: "optional", district: "", province:"", otherAddress: false, shippingId: 291404, shippingMethods: [{&quot;id&quot;:291404,&quot;alias&quot;:&quot;giao-hang-tan-noi-40000.0000&quot;,&quot;price&quot;:40000.0000,&quot;title&quot;:&quot;Giao hàng tận nơi&quot;,&quot;value&quot;:&quot;291404,0&quot;},], customerAddressId: 0, reductionCode: "" })}'>
            <div class='sidebar '>
                <div class="sidebar_header">
                    <h2>

                        <label class="control-label">Đơn hàng của quý khách</label>
                       
                    </h2>
                    <hr class="full_width"/>
                </div>
                <div class="sidebar__content">
                    <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                        <div class="summary-body summary-section summary-product" >
                            <div class="summary-product-list">
                                <table class="product-table">
                                    <tbody>
                                        <?php foreach ($cart as $key => $value) { ?>
                                
                                       
                                            <tr class="product product-has-image clearfix">
                                                <td>
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail__wrapper">
                                                            
                                                            <?php echo $this->Html->image($value['image_link'],['id'=>'anh']);?>
                                                            
                                                        </div>
                                                       

                                                    </div>
                                                </td>
                                                <td class="product-info">
                                                    <span class="product-info-name">
                                                        
                                                        <?php echo $value['product_name']; echo " (".$value['quantity'].")"; ?>
                                                    </span>
                                                    
                                                    
                                                </td>
                                                <td class="product-price text-right">
                                                    <?php echo number_format($value['price']*$value['quantity'],0,"","."); echo "₫"?> 
                                                </td>
                                            </tr>
                                             <?php } ?>
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>
                        <hr class="m0"/>
                    </div>
                   
                    <div class="order-summary order-summary--total-lines">
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-subtotal clearfix">
                                <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span class="total-line-subprice pull-right">
                                    <?php echo number_format($total_bill,0,"","."); echo "₫" ?>
                                </span>
                            </div>
                            <div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
                                <span class="total-line-name pull-left">
                                    Phí vận chuyển
                                </span>
                                <span class="total-line-subprice pull-right">
                                    Thu khi giao hàng
                                </span>
                                
                            </div>
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span class="total-line-price pull-right">
                                    <?php echo number_format($total_bill,0,"","."); echo "₫" ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix hidden-sm hidden-xs">
                        <div class="field__input-btn-wrapper mt10">
                            <a class="previous-link" href="/homeusers/index">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span>Tiếp tục mua hàng</span>
                            </a>
                            <button class="button12" type="submit"  >
                                Đặt hàng
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="main" role="main">
                <div class="main_header">
                    <div class="shop logo logo--left ">
    
                    </div>
                </div>
                <div class="main_content">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="section" define="{billing_address: {&quot;address1&quot;:null,&quot;address2&quot;:null,&quot;city&quot;:&quot;&quot;,&quot;company&quot;:null,&quot;country&quot;:&quot;Việt Nam&quot;,&quot;first_name&quot;:null,&quot;last_name&quot;:null,&quot;name&quot;:&quot;&quot;,&quot;full_name&quot;:&quot;&quot;,&quot;phone&quot;:null,&quot;phone_number&quot;:null,&quot;province&quot;:&quot;&quot;,&quot;province_code&quot;:&quot;&quot;,&quot;district&quot;:&quot;&quot;,&quot;district_code&quot;:&quot;&quot;,&quot;zip&quot;:null,&quot;country_code&quot;:&quot;VN&quot;}}">
                                <div class="section__header">
                                    <div class="layout-flex layout-flex--wrap">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                            <label class="control-label">Thông tin mua hàng</label>
                                        </h2>
                                        <?php if(!$user){ ?>
                                               
                                                <?= $this->Html->link('<i class="fa
                                                fa-user-circle-o fa-lg" aria-hidden="true" ></i> '.' Đăng nhập',['quy'=>'dathang','id'=>2,'controller'=>'Acounts','action'=>'login'],['escape'=>false]) ?>
                                               
                                         
                                    </div>
                                </div>
                                <div class="section__content">
                                    
                                    
                                        <div class="form-group" bind-class="{'has-error' : invalidEmail}">
                                            <div>
                                                <label class="field__input-wrapper" bind-class="{ 'js-is-filled': email }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Email
                                                    </span>
                                                    <input name="Email" type="email" bind-event-change="changeEmail()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_email" data-error="Vui lòng nhập email đúng định dạng"  name="Email"  value=""  pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" bind="email" />
                                                   
                                                </label>
                                            </div>
                                            <div class="help-block with-errors">
                                            </div>
                                        </div>
                                    
                                    <div class="billing">
                                        <div>
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="name" type="text" bind-event-change="saveAbandoned()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_last_name" data-error="Vui lòng nhập họ tên" required bind="billing_address.full_name" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.phone }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Số điện thoại
                                                        </span>
                                                        <input name="phone" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_phone"  data-error="Vui lòng nhập số điện thoại" required  bind="billing_address.phone"/>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.address1 }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Địa chỉ
                                                        </span>
                                                        <input name="address" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_address1"  bind="billing_address.address1" />
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                
                                                <div class="form-group">
                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                        <label class="field__label" for="BillingProvinceId">
                                                            Tỉnh thành
                                                        </label>
                                                        <select class="field__input field__input--select form-control" name="district" id="billingProvince" required data-error="Bạn chưa chọn tỉnh thành" bind-event-change="billingProviceChange('')" bind="BillingProvinceId">
                                                            <option value=''>--- Chọn tỉnh thành ---</option>
                                                            
    
        <option  value="18">Hà Nội</option>
    
        <option  value="50">TP Hồ Chí Minh</option>
    
        <option  value="54">An Giang</option>
    
        <option  value="49">Bà Rịa-Vũng Tàu</option>
    
        <option  value="14">Bắc Giang</option>
    
        <option  value="9">Bắc Kạn</option>
    
        <option  value="61">Bạc Liêu</option>
    
        <option  value="16">Bắc Ninh</option>
    
        <option  value="55">Bến Tre</option>
    
        <option  value="35">Bình Định</option>
    
        <option  value="46">Bình Dương</option>
    
        <option  value="45">Bình Phước</option>
    
        <option  value="39">Bình Thuận</option>
    
        <option  value="62">Cà Mau</option>
    
        <option  value="63">Cần Thơ</option>
    
        <option  value="8">Cao Bằng</option>
    
        <option  value="32">Đà Nẵng</option>
    
        <option  value="42">Đắk Lắk</option>
    
        <option  value="43">Đắk Nông</option>
    
        <option  value="3">Điện Biên</option>
    
        <option  value="46">Đồng Nai</option>
    
        <option  value="22">Đồng Tháp</option>
    
        <option  value="41">Gia Lai</option>
    
        <option  value="7">Hà Giang</option>
    
        <option  value="17">Hà Nam</option>
    
        <option  value="28">Hà Tĩnh</option>
    
        <option  value="19">Hải Dương</option>
    
        <option  value="20">Hải Phòng</option>
    
        <option  value="58">Hậu Giang</option>
    
        <option  value="4">Hòa Bình</option>
    
        <option  value="21">Hưng Yên</option>
    
        <option  value="37">Khánh Hòa</option>
    
        <option  value="59">Kiên Giang</option>
    
        <option  value="40">Kon Tum</option>
    
        <option  value="5">Lai Châu</option>
    
        <option  value="36">Lâm Đồng</option>
    
        <option  value="10">Lạng Sơn</option>
    
        <option  value="1">Lào Cai</option>
    
        <option  value="51">Long An</option>
    
        <option  value="22">Nam Định</option>
    
        <option  value="27">Nghệ An</option>
    
        <option  value="23">Ninh Bình</option>
    
        <option  value="38">Ninh Thuận</option>
    
        <option  value="13">Phú Thọ</option>
    
        <option  value="36">Phú Yên</option>
    
        <option  value="29">Quảng Bình</option>
    
        <option  value="33">Quảng Nam</option>
    
        <option  value="34">Quảng Ngãi</option>
    
        <option  value="49">Quảng Ninh</option>
    
        <option  value="30">Quảng Trị</option>
    
        <option  value="60">Sóc Trăng</option>
    
        <option  value="6">Sơn La</option>
    
        <option  value="48">Tây Ninh</option>
    
        <option  value="54">Thái Bình</option>
    
        <option  value="55">Thái Nguyên</option>
    
        <option  value="26">Thanh Hóa</option>
    
        <option  value="31">Thừa Thiên Huế</option>
    
        <option  value="53">Tiền Giang</option>
    
        <option  value="57">Trà Vinh</option>
    
        <option  value="60">Tuyên Quang</option>
    
        <option  value="56">Vĩnh Long</option>
    
        <option  value="25">Vĩnh Phúc</option>
    
        <option  value="2">Yên Bái</option>
    

                                                        </select>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                
                                                    <div bind-show="!otherAddress" class="form-group">
                                                        <!-- <div class="field__input-wrapper field__input-wrapper--select">
                                                            <label class="field__label" for="BillingDistrictId">
                                                                Quận huyện
                                                            </label>
                                                            <select class="field__input field__input--select form-control" name="BillingDistrictId" id="billingDistrict"  bind-event-change="billingDistrictChange('')" bind="BillingDistrictId">
                                                                <option value="">--- Chọn quận huyện ---</option>
                                                                
                                                                    
                                                                
                                                            </select>
                                                        </div> -->
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                
                                            
                                            <div bind-show="!otherAddress" class="form-group">
                                                <div class="error hide" bind-show="requiresShipping && loadedShippingMethods && shippingMethods.length == 0  && BillingProvinceId  ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } 
                            else { ?>
                                                
                                        
                                    </div>
                                </div>
                                <div class="section__content">
                                    
                                    
                                        <div class="form-group" bind-class="{'has-error' : invalidEmail}">
                                            <div>
                                                <label class="field__input-wrapper" bind-class="{ 'js-is-filled': email }">
                                                    <!-- <span class="field__label" bind-event-click="handleClick(this)">
                                                        Email
                                                    </span> -->
                                                    <input name="Email" type="email" class="field__input form-control" id="_email"  name="Email"  value=<?php echo $user['email']; ?>  readonly  />
                                                   
                                                </label>
                                            </div>
                                            <div class="help-block with-errors">
                                            </div>
                                        </div>
                                    
                                    <div class="">
                                        <div>
                                            <div class="">
                                                <div >
                                                   <!--  <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span> -->
                                                    <input value=<?php echo $user['fullname']; ?> name="name" type="text" class="field__input form-control" readonly/>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.phone }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Số điện thoại
                                                        </span>
                                                        <input name="phone" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_phone"  data-error="Vui lòng nhập số điện thoại" required  bind="billing_address.phone"/>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.address1 }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Địa chỉ
                                                        </span>
                                                        <input name="address" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_address1"  data-error="Vui lòng nhập địa chỉ" required bind="billing_address.address1" />
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                
                                                <div class="form-group">
                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                        <label class="field__label" for="BillingProvinceId">
                                                            Tỉnh thành
                                                        </label>
                                                        <select class="field__input field__input--select form-control" name="district" id="billingProvince" required data-error="Bạn chưa chọn tỉnh thành" bind-event-change="billingProviceChange('')" bind="BillingProvinceId">
                                                            <option value=''>--- Chọn tỉnh thành ---</option>
                                                            
    
         <option  value="18">Hà Nội</option>
    
        <option  value="50">TP Hồ Chí Minh</option>
    
        <option  value="54">An Giang</option>
    
        <option  value="49">Bà Rịa-Vũng Tàu</option>
    
        <option  value="14">Bắc Giang</option>
    
        <option  value="9">Bắc Kạn</option>
    
        <option  value="61">Bạc Liêu</option>
    
        <option  value="16">Bắc Ninh</option>
    
        <option  value="55">Bến Tre</option>
    
        <option  value="35">Bình Định</option>
    
        <option  value="46">Bình Dương</option>
    
        <option  value="45">Bình Phước</option>
    
        <option  value="39">Bình Thuận</option>
    
        <option  value="62">Cà Mau</option>
    
        <option  value="63">Cần Thơ</option>
    
        <option  value="8">Cao Bằng</option>
    
        <option  value="32">Đà Nẵng</option>
    
        <option  value="42">Đắk Lắk</option>
    
        <option  value="43">Đắk Nông</option>
    
        <option  value="3">Điện Biên</option>
    
        <option  value="46">Đồng Nai</option>
    
        <option  value="22">Đồng Tháp</option>
    
        <option  value="41">Gia Lai</option>
    
        <option  value="7">Hà Giang</option>
    
        <option  value="17">Hà Nam</option>
    
        <option  value="28">Hà Tĩnh</option>
    
        <option  value="19">Hải Dương</option>
    
        <option  value="20">Hải Phòng</option>
    
        <option  value="58">Hậu Giang</option>
    
        <option  value="4">Hòa Bình</option>
    
        <option  value="21">Hưng Yên</option>
    
        <option  value="37">Khánh Hòa</option>
    
        <option  value="59">Kiên Giang</option>
    
        <option  value="40">Kon Tum</option>
    
        <option  value="5">Lai Châu</option>
    
        <option  value="36">Lâm Đồng</option>
    
        <option  value="10">Lạng Sơn</option>
    
        <option  value="1">Lào Cai</option>
    
        <option  value="51">Long An</option>
    
        <option  value="22">Nam Định</option>
    
        <option  value="27">Nghệ An</option>
    
        <option  value="23">Ninh Bình</option>
    
        <option  value="38">Ninh Thuận</option>
    
        <option  value="13">Phú Thọ</option>
    
        <option  value="36">Phú Yên</option>
    
        <option  value="29">Quảng Bình</option>
    
        <option  value="33">Quảng Nam</option>
    
        <option  value="34">Quảng Ngãi</option>
    
        <option  value="49">Quảng Ninh</option>
    
        <option  value="30">Quảng Trị</option>
    
        <option  value="60">Sóc Trăng</option>
    
        <option  value="6">Sơn La</option>
    
        <option  value="48">Tây Ninh</option>
    
        <option  value="54">Thái Bình</option>
    
        <option  value="55">Thái Nguyên</option>
    
        <option  value="26">Thanh Hóa</option>
    
        <option  value="31">Thừa Thiên Huế</option>
    
        <option  value="53">Tiền Giang</option>
    
        <option  value="57">Trà Vinh</option>
    
        <option  value="60">Tuyên Quang</option>
    
        <option  value="56">Vĩnh Long</option>
    
        <option  value="25">Vĩnh Phúc</option>
    
        <option  value="2">Yên Bái</option>
    
                                                        </select>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                
                                                    <div bind-show="!otherAddress" class="form-group">
                                                        <!-- <div class="field__input-wrapper field__input-wrapper--select">
                                                            <label class="field__label" for="BillingDistrictId">
                                                                Quận huyện
                                                            </label>
                                                            <select class="field__input field__input--select form-control" name="BillingDistrictId" id="billingDistrict"  bind-event-change="billingDistrictChange('')" bind="BillingDistrictId">
                                                                <option value="">--- Chọn quận huyện ---</option>
                                                                
                                                                    
                                                                
                                                            </select>
                                                        </div> -->
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                
                                            
                                            <div bind-show="!otherAddress" class="form-group">
                                                <div class="error hide" bind-show="requiresShipping && loadedShippingMethods && shippingMethods.length == 0  && BillingProvinceId  ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php }?>

                            <div class="section pt10">
                                <div class="section__content">
                                    <div class="form-group" bind-show="requiresShipping">
                                        <div class="checkbox-wrapper">
                                            <div class="checkbox__input">
                                                <input class="input-checkbox" type="checkbox"  value="false"  name="otherAddress" id="other_address" bind="otherAddress" bind-event-change="changeOtherAddress(this)">
                                            </div>
                                            <label class="checkbox__label" for="other_address">
                                                Giao hàng đến địa chỉ khác
                                            </label>          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section pt10" bind-show="otherAddress">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">
                                            Thông tin nhận hàng
                                        </label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div bind-show="otherAddress" define="{shipping_address: {&quot;address1&quot;:null,&quot;address2&quot;:null,&quot;city&quot;:&quot;&quot;,&quot;company&quot;:null,&quot;country&quot;:&quot;Việt Nam&quot;,&quot;first_name&quot;:null,&quot;last_name&quot;:null,&quot;name&quot;:&quot;&quot;,&quot;full_name&quot;:&quot;&quot;,&quot;phone&quot;:null,&quot;phone_number&quot;:null,&quot;province&quot;:&quot;&quot;,&quot;province_code&quot;:&quot;&quot;,&quot;district&quot;:&quot;&quot;,&quot;district_code&quot;:&quot;&quot;,&quot;zip&quot;:null,&quot;country_code&quot;:&quot;VN&quot;}, shipping_expand:true,show_district:  true ,show_country:  false }" class="shipping  hide ">
                                        <div bind-show="shipping_expand || !otherAddress">
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="name_receiver" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_last_name" data-error="Vui lòng nhập họ tên" bind="shipping_address.full_name" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.phone }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Số điện thoại
                                                        </span>
                                                        <input name="phone_receiver" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_phone"  data-error="Vui lòng nhập số điện thoại"  bind="shipping_address.phone"/>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.address1 }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Địa chỉ
                                                        </span>
                                                        <input name="address_receiver" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_address1" data-error="Vui lòng nhập số điện thoại" required bind="shipping_address.address1" />
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                
                                                <div class="form-group">
                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                        <label class="field__label" for="BillingProvinceId">
                                                            Tỉnh thành
                                                        </label>
                                                        <select class="field__input field__input--select form-control" name="district_receiver" id="shippingProvince" data-error="Bạn chưa chọn tỉnh thành" bind-event-change="shippingProviceChange('')" bind="ShippingProvinceId">
                                                            <option value=''>--- Chọn tỉnh thành ---</option>
                                                            
                                                                
                                                                     <option  value="18">Hà Nội</option>
    
        <option  value="50">TP Hồ Chí Minh</option>
    
        <option  value="54">An Giang</option>
    
        <option  value="49">Bà Rịa-Vũng Tàu</option>
    
        <option  value="14">Bắc Giang</option>
    
        <option  value="9">Bắc Kạn</option>
    
        <option  value="61">Bạc Liêu</option>
    
        <option  value="16">Bắc Ninh</option>
    
        <option  value="55">Bến Tre</option>
    
        <option  value="35">Bình Định</option>
    
        <option  value="46">Bình Dương</option>
    
        <option  value="45">Bình Phước</option>
    
        <option  value="39">Bình Thuận</option>
    
        <option  value="62">Cà Mau</option>
    
        <option  value="63">Cần Thơ</option>
    
        <option  value="8">Cao Bằng</option>
    
        <option  value="32">Đà Nẵng</option>
    
        <option  value="42">Đắk Lắk</option>
    
        <option  value="43">Đắk Nông</option>
    
        <option  value="3">Điện Biên</option>
    
        <option  value="46">Đồng Nai</option>
    
        <option  value="22">Đồng Tháp</option>
    
        <option  value="41">Gia Lai</option>
    
        <option  value="7">Hà Giang</option>
    
        <option  value="17">Hà Nam</option>
    
        <option  value="28">Hà Tĩnh</option>
    
        <option  value="19">Hải Dương</option>
    
        <option  value="20">Hải Phòng</option>
    
        <option  value="58">Hậu Giang</option>
    
        <option  value="4">Hòa Bình</option>
    
        <option  value="21">Hưng Yên</option>
    
        <option  value="37">Khánh Hòa</option>
    
        <option  value="59">Kiên Giang</option>
    
        <option  value="40">Kon Tum</option>
    
        <option  value="5">Lai Châu</option>
    
        <option  value="36">Lâm Đồng</option>
    
        <option  value="10">Lạng Sơn</option>
    
        <option  value="1">Lào Cai</option>
    
        <option  value="51">Long An</option>
    
        <option  value="22">Nam Định</option>
    
        <option  value="27">Nghệ An</option>
    
        <option  value="23">Ninh Bình</option>
    
        <option  value="38">Ninh Thuận</option>
    
        <option  value="13">Phú Thọ</option>
    
        <option  value="36">Phú Yên</option>
    
        <option  value="29">Quảng Bình</option>
    
        <option  value="33">Quảng Nam</option>
    
        <option  value="34">Quảng Ngãi</option>
    
        <option  value="49">Quảng Ninh</option>
    
        <option  value="30">Quảng Trị</option>
    
        <option  value="60">Sóc Trăng</option>
    
        <option  value="6">Sơn La</option>
    
        <option  value="48">Tây Ninh</option>
    
        <option  value="54">Thái Bình</option>
    
        <option  value="55">Thái Nguyên</option>
    
        <option  value="26">Thanh Hóa</option>
    
        <option  value="31">Thừa Thiên Huế</option>
    
        <option  value="53">Tiền Giang</option>
    
        <option  value="57">Trà Vinh</option>
    
        <option  value="60">Tuyên Quang</option>
    
        <option  value="56">Vĩnh Long</option>
    
        <option  value="25">Vĩnh Phúc</option>
    
        <option  value="2">Yên Bái</option>
    
                                                                
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                
                                                    <!-- <div class="form-group">
                                                        <div class="field__input-wrapper field__input-wrapper--select">
                                                            <label class="field__label" for="BillingDistrictId">
                                                                Quận huyện
                                                            </label>
                                                            <select class="field__input field__input--select form-control" name="ShippingDistrictId" id="shippingDistrict"  bind-event-change="shippingDistrictChange('')" bind="ShippingDistrictId">
                                                                <option value="">--- Chọn quận huyện ---</option>
                                                                
                                                                    
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div> -->
                                                
                                            
                                            <div class="form-group">
                                                <div class="error hide" bind-show="requiresShipping && shippingMethods.length == 0 && ShippingProvinceId ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section" bind-class="{ 'pt0': otherAddress, 'pt10': !otherAddress}">
                                <div class="section__content">
                                    <div class="form-group m0">
                                        <textarea name="note" bind-event-change="saveAbandoned()" value="" class="field__input form-control m0" placeholder="Ghi chú"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="section shipping-method hide" bind-show="shippingMethods.length > 0">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-truck fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Vận chuyển</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">
                                    
                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio"  checked="checked"  value="291404,0" name="ShippingMethod" id="shipping_method_291404" bind="shippingMethod" bind-event-change="changeShippingMethod()" fee="40000.0000">
                                                </div>
                                                <label class="radio__label" for="shipping_method_291404"> <span class="radio__label__primary">Giao hàng tận nơi</span>
                                                    <span class="radio__label__accessory">
                                                        <span class="content-box__emphasis">
                                                            
                                                                
                                                            
                                                        </span>
                                                    </span>
                                                </label> 
                                            </div> 
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="section payment-methods" bind-class="{'p0--desktop': shippingMethods.length == 0}">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Thanh toán</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">
                                        
    <div class="content-box__row">
        <div class="radio-wrapper">
            <div class="radio__input">
                <input class="input-radio" type="radio" value="201007" name="PaymentMethodId" id="payment_method_201007" data-check-id="4" bind="payment_method_id" checked>
            </div>
            <label class="radio__label" for="payment_method_201007">
                <span class="radio__label__primary">Thanh toán khi giao hàng (Đ)</span>
                <span class="radio__label__accessory">
                    <ul>
                        <li class="payment-icon-v2 payment-icon--4">
                            
                                <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>
                            
                        </li>
                    </ul>
                </span>
            </label> 
        </div> <!-- /radio-wrapper--> 
    </div>
        <div class="radio-wrapper content-box__row content-box__row--secondary hide" id="payment-gateway-subfields-201007" bind-show="payment_method_id == 201007">
            <div class="blank-slate">
                <p>dong</p>

            </div>
        </div>
    

                      </div>
                                </div>
                            </div>
                            <div class="section hidden-md hidden-lg">
                                <div class="form-group clearfix m0">
                                    <input action="/Bills/bill" class="btn btn-primary btn-checkout" data-loading-text="Đang xử lý" type="submit" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG" />
                                     
                                </div>
                                <?php echo $this->Html->link('Đặt hàng',['method'=>'post','type'=>'submit','controller'=>'Bills','action'=>'bill']) ;
        ?>        
                                <div class="text-center mt20">
                                    <a class="previous-link" href="/homeusers/index">
                                        <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                        <span>Tiếp tục mua hàng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>

    <script src='//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/twine.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/validator.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/nprogress.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/money-helper.js?20171025' type='text/javascript'></script>

<script src='//bizweb.dktcdn.net/assets/themes_support/checkout.js?20180327' type='text/javascript'></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        NProgress.start();
    });
    $(document).ajaxComplete(function () {
        NProgress.done();
    });

    context = {}

    $(function () {
        Twine.reset(context).bind().refresh();
    });
    
    $(document).ready(function () {
        setTimeout(function(){
        
        
            $("input[name='ShippingMethod']").trigger("change");
        
        }, 50);
        
    });
</script>
    <script type='text/javascript'>UA-42795563-11</script>
</body>
</html>