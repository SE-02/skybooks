<div class="products-grid">
                
                <div class="clearfix">
                </div>
                 <div class="clearfix">
                </div>
                <div class="row">
                <?php foreach ($list_productOfCatalog as $v) { ?>
                  
               
                  <div class="col-md-4 col-sm-6">
                    <div class="products">
                      <div class="offer">
                        <?php echo $v->discount; ?>%
                      </div>
                      <div class="thumbnail">
                        
                           <?php echo $this->Html->image($v->image_link) ?>
                        
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
                