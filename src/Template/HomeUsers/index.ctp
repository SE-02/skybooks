

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
</style>

<div class="products-grid">
<div class="clearfix">
</div>
<div class="chitiet" style="">
  <ul>
      <li>
          SÁCH BÁN CHẠY
      </li>
  </ul>
</div>
<div class="row">
<?php foreach ($product as $v) { ?>
  

  <div class="col-md-4 col-sm-6">
    <div class="products">
      <div class="offer">
       <?php echo $v['product']['discount']; ?>%
      </div>
      <div class="thumbnail">
        <a href="details.html">
           <?php echo $this->Html->image($v['product']['image_link']) ?>
        </a>
      </div>
      <div class="productname">
        <?php echo $v['product']['product_name']; ?>
      </div>
      <h4 class="price">
        <?php echo number_format($v['product']['price'],0,"","."); echo "₫"?>
        
      </h4>
      <!-- <div class="button_group">
        <button class="button add-cart" type="button">
          Mua ngay
        </button>
        <button class="button compare" type="button">
          <i class="fa fa-exchange">
          </i>
          Xem
        </button>
        <button class="button wishlist" type="button">
          <i class="fa fa-heart-o">
          </i>
        </button>

      </div> -->
      <div class="button_group">
      <button class="button add-cart" type="button">
        <?php echo $this->Html->link('Mua ngay',['method'=>'post','type'=>'submit','controller'=>'ShopCart','action'=>'cart',$v->product_id]) 
        ?>
      </button>
      
      <button class="button compare" type="button">
      
        <?php echo $this->Html->link('Xem',['type'=>'button','class'=>'xem','controller'=>'DetailProduct','action'=>'index',$v->product_id]) 
        ?>
      </button>
      <style>
      .xem{
          color: red;
      }
      </style>

     
      

      <button class="button wishlist" type="button">
        <i class="fa fa-heart-o">
        </i>
      </button>

    </div>
    </div>

    
   
  
          
  </div>
  <?php  } ?>
</div>
<div class="">
  <div class="box-footer">
    <ul class="pagination pagination-sm no-margin pull-right">
    <li>
      <?= $this->Paginator->prev('<<')?>
    </li>
    <li>
      <?= $this->Paginator->numbers(array('modulus'=>5))?>
    </li>
    <li>
      <?= $this->Paginator->next('>>')?>
    </li>

  </ul>
  
  </div> 
</div>
</div>

  
<div class="clearfix">
</div>
<div class="chitiet" style="">
  <ul>
      <li>
          SÁCH MỚI
      </li>
  </ul>
</div>
  <div class="row">
<?php foreach ($new_book as $v) { ?>
  

  <div class="col-md-4 col-sm-6">
    <div class="products">
      <div class="offer">
       <?php echo $v->discount; ?>%
      </div>
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
        <?php echo $this->Html->link('Mua ngay',['method'=>'post','type'=>'submit','controller'=>'ShopCart','action'=>'cart',$v->product_id]) 
        ?>
      </button>
      
      <button class="button compare" type="button">
      
        <?php echo $this->Html->link('Xem',['type'=>'button','class'=>'xem','controller'=>'DetailProduct','action'=>'index',$v->product_id]) 
        ?>
      </button>
      <style>
      .xem{
          color: red;
      }
      </style>

     
      

      <button class="button wishlist" type="button">
        <i class="fa fa-heart-o">
        </i>
      </button>

    </div>
    </div>

    
   
  
          
  </div>
  <?php  } ?>
</div>
