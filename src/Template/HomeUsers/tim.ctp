

<div class="tim">
      <form action="/HomeUsers/tim/" method="POST" >
            <div>
                <h4  style="width: 40%; background-color:#FFFFFF ; color:#2E9AFE ">Kết quả tìm kiếm...</h4>
                <input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Nhập để tìm kiếm..." type="text" value="" >
            </div>
     </form>
    </div>
  
      <div class="row" style="margin-left: 40px;margin-top:50px;">
                <?php foreach ($data as $v) { ?>
                  
               
                  <div class="col-md-4 col-sm-6">
                    <div class="products">
                      <div class="thumbnail">
                        <a href="details.html">
                           <?php echo $this->Html->image($v->image_link) ?>
                        </a>
                      </div>
                      <div class="productname">
                        <?php echo $v->product_name?>
                      </div>
                      <h4 class="price">
                        <?php echo number_format($v->price,0,"","."); echo "₫"?>
                        
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                     
                           <?php echo $this->Html->link('Mua ngay',['type'=>'button','class'=>'mua']) 
                        ?>
                        </button>
                        <style type="text/css">
                          .mua{
                        color:red;
                        }
                        </style>
                        
                        <button class="button compare" type="button">
                          Xem
                        </button>
                        

                      </div>
                    </div>    
                  </div>
                  <?php  } ?>
       </div>