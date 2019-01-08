<div class="products-grid">
                
                <div class="clearfix">
                </div>
                <div class="row">
                <?php foreach ($product as $v) { ?>
                  
               
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

                      <style type="text/css">
                        .productname:hover{
                          color: blue;
                          transform: translateY(0);
                          visibility: visible;   
                          opacity: 1;
                        }
                        .img__description {
                          transition: .2s;
                          transform: translateY(1em);
                        }

                        .img__wrap:hover .img__description {
                          transform: translateY(0);
                        }
                        
                      </style>


                      <div class="productname" style="height: 19px !important;
                          overflow: hidden;
                          line-height: 20px;
                          white-space: normal;
                          ">                     
                        <?php echo $v->product_name?>
                      <div class="img__description">
                        <?php echo $v->product_name?>
                      </div>
                      </div>
                      <h4 class="price">
                        <?php echo number_format($v->price,0,"","."); echo "₫"?>
                        
                      </h4>
                      <div class="button_group">
                        <button class="button add-cart" type="button">
                          Mua ngay
                        </button>
                        <button class="button compare" type="button">
                          <!-- <i class="fa fa-exchange">
                          </i> -->
                          Xem
                        </button>
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
                <!-- <div class="toolbar">
                  <div class="sorter bottom">
                    <div class="view-mode">
                      <a href="productlitst.html" class="list">
                        List
                      </a>
                      <a href="#" class="grid active">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sort by : 
                      <select name="">
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="
<strong>
#
</strong>
">
  Price
                        </option>
                      </select>
                    </div>
                    <div class="limiter">
                      Show : 
                      <select name="" >
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>
                  </div>
                  
                   
                </div>
                </div>
                <div class="clearfix">
                </div>
              </div>
 </div> 