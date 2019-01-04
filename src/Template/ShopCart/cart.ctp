<style>
  #margin{
    margin-top:50px;
    margin-bottom: 20px;
  }
  .container{
    font-family: Arial;
  }
  #ten{
    margin:20px!important;
    font-weight: 400;
  }
  #row{
    font-size: 15px;
  }
  #name{
    font-size: 15px!important;
    margin-top: 16px!important;
    
  }
  #gach{
    margin-bottom: 5px!important;
  }
  .name{
    margin-left: -80px;
    font-weight: 600;
    /*//color: red;*/
  }
  #qt{
    width: 65px!important;
    height: 30px;

  }
  .quantity {
  float: left;
  padding-top: 20px;
  margin-right: 60px;
  display: flex;
}
.quantity input {
  float: left;
  -webkit-appearance: none;
  border: none;
  text-align: center;
  width: 80px;
  margin: -10px;
  font-size: 14px;
  color: #43484D;
  font-weight: 300;

}
#plus {
  float: left;
  width: 30px;
  height: 30px;
  background-color: #E1E8EE;
  border-radius: 6px;
  border: none;
  cursor: pointer;
  color: black;
  text-align: center;
  padding: 10px;
  
  
}
#dau{
  left: 50%; 
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  padding: 10px;
  margin-top:5px;

}
#mau{
  color: white;
}

 
button:focus,
input:focus {
  outline:0;
}
.fa-trash-o{
  color: white!important;
  text-align: center;
}
.btn-sm{
  padding-left: 5px;
}
.empty{
  background-color: #d9534f;
  border-color: #d43f3a;
  margin-left: 30px;

}
.empty:hover{
  background-color: red;
}
#gia{
  border: none;
  width: 75px;
}
#thanhtien{
  border: none;
  width: 75px;
}
#row{
  font-weight: 700;
}
#tongtien{
  border: none;
  padding-left: 40px;
  font-size: 15px!important;
  margin-top: 16px!important;
  margin-left: -5px;
  font-weight: 600;
  width: 150px;
}
 

</style>  
 <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
<h2 class="text-center" id = "ten">Giỏ hàng của bạn</h2>

<div class="container"> 
<table id="cart" class="table table-hover table-condensed" > 
  <thead> 
  <hr id = "gach">
    
   <tr> 
    <th id = "row" style="width:40%">Sản phẩm</th> 
    <th id = "row" style="width:10%">Giá</th> 
    <th id = "row" class = "qty" style="width:7%">Số lượng</th> 
    <th id = "row" style="width:20%" class="text-center">Thành tiền</th> 
    <th id = "row" style="width:5%">Hủy</th> 
   </tr> 
  </thead> 
  
  <tbody>
  <?php foreach ($cart as $v) { ?>
  <tr> 
    <td data-th="Product"> 
      <div class="row"> 
       
        <div class="col-sm-2 hidden-xs"><?php echo $this->Html->image($v['image_link']);?></div> 
        <div class="col-sm-10"> 
        <h4 id= "name" class="nomargin"><?php echo $v['product_name'];?></h4> 
        </div> 
      </div> 
    </td> 
    <td  data-th="Price"><h4 id= "name" ><input id = "gia" value = <?php echo number_format($v['price'],0,"",".");echo "₫"; ?> readonly/></h4></td> 
    <td data-th="Quantity">
    
     <div class="item">
        <div class="quantity">
          <!-- <button id="plus" class="plus-btn" type="button" name="button">
            <div id="dau">+</div>
          </button>
          <input type="text" name="name" value=<?php //echo $v['quantity'];?> >
          <button id="plus" class="minus-btn" type="button" name="button">
            <div id="dau">-</div>
          </button> -->
          <input type="number" title="Số lượng" min="1" value=<?php echo $v['quantity'];?>  maxlength="12" id="soluong" name="quantity" class="input-text qty" >
        </div>
    </div>

  
   </td> 
   


   <td data-th="Subtotal" class="text-center"><h4 id = "name"><input id="thanhtien" value = <?php echo number_format($v['price']*$v['quantity'],0,"","."); echo "₫"?> readonly></h4></td> 
   <td class="actions" data-th="">
      <button id= "name" class="btn btn-danger btn-sm">
        
        <?php
          echo $this->Form->postLink('&nbsp; <i class="fa fa-trash-o" ></i>', ['action'=>'remove',$v['id']], ['escape' => false]);
        ?>
       
      </button>
   </td> 
  </tr> 
 
   <?php }?>
    
  </tbody>
  <tfoot> 
  
   <tr> 
    <td>
      <a href="/HomeUsers/index" class="btn btn-warning" id="margin"><i class="fa fa-angle-left"></i> Tiếp tục mua </a>
      <a href="/ShopCart/emptyCart" class="btn btn-warning empty" id="margin">Làm rỗng giỏ hàng </a>
    </td> 

    <td colspan="2" class="hidden-xs"> </td> 

    <td class="hidden-xs text-center"><strong id = "name" class="name">Tổng tiền : <input id = "tongtien" value = <?php echo number_format($total,0,"","."); echo "₫"?> readonly/></strong>
    </td> 
    <td><a href="/Bills/dathang" class="btn btn-success btn-block" id="margin">Ðặt hàng <i class="fa fa-angle-right"></i></a>
     
    </td> 
   </tr> 
  </tfoot> 
 </table>

</div>
<script type="text/javascript">
  // $(document).ready(function() {
  //   update_amount();
  //   $('#soluong').change(function(){

  //     update_amount();
  //   });

  // });
  // function update_amount(){
  //   var giaSach = document.getElementById('gia').value;
  //   var giaSach1 = parseFloat(giaSach);
  //   var giaSach2 = giaSach1.toFixed(3);
    
  //   var soLuong = document.getElementById('soluong').value;
    
  //   var thanhtien = (giaSach2*soLuong).toFixed(3);
    
  //   if(!isNaN(thanhtien)){
  //     document.getElementById('thanhtien').value = thanhtien;
  //   }

  // }
</script>
<!--  <script type="text/javascript">
      $('.minus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
          value = value - 1;
        } else {
          value = 1;
        }

        $input.val(value);

      });

      $('.plus-btn').on('click', function(e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
          value = value + 1;
        } else {
          value =100;
        }

        $input.val(value);
        console.log($input.val(value));
      });

      
    </script>
 
 -->