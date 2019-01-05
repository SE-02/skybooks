 <h3>Lịch sử mua hàng</h3>
              <br>
              <style type="text/css">
                  p{
                      padding-left: 10px;
                      font-weight: 400;
                      color: #81BEF7;
                      margin-left: 10px;
                  }
                  span{
                      margin-left: 10px;
                  }
              </style>
              <p style="padding-top: 10px;">Khách hàng: 
                <span ><?php echo $query[0]['khachhang'] ?></span>
              </p>

               <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr>
                        <th class = "text-center">Sản phẩm</th>
                        <th class = "text-center" >Số lượng</th>
                        <th class = "text-center" >Thành tiền</th>

                    </tr>
                </thead>
                 <tbody>
                        <?php                        
                            foreach ($query as $v) {
                        ?>
                        <tr >
                            <td class = "text-center" >
                                <?php echo $v['sanpham']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['soluong']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo number_format($v['thanhtien'],0,"","."); ?>
                            </td>                        
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

              </li>
            </ul>
          </div>
        </div>
      </div>
         <?= $this->Form->end(); ?>