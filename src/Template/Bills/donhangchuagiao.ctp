<section class="content-header">
    <h1>
        Quản lí đơn hàng
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Quản lí đơn hàng</li>
    </ol>
</section>

<section class="content">

<?php echo $this->Form->create() ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Đơn hàng đã xử lí</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class="text-center">Mã đơn</th> 
                        <th class = "text-center" >Khách hàng</th>
                        <th class = "text-center" >Địa chỉ</th>
                        <th class = "text-center" >Số lượng</th>
                        <th class = "text-center" >Thành tiền</th>
                        <th class = "text-center" >Ngày lập</th>
                        <th class="text-center">Phê duyệt</th>
                        

                    </tr>
                </thead>
                 <tbody>
                        <?php 
                        
                            foreach ($query as $v) {
                              //print_r($query['madon']);die;
                        ?>

                        <tr >
                        
                            <td class = "text-center" >    
                                <?= $this->Html->link($v['madon'], ['action' => 'chitietdonhang',$v->madon], ['escape' => false]) ?>  
                            </td>
                             <td class = "text-center" >
                                <?php echo $v['khachhang']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php 
                                if(!$v['diachikhac']){
                                    echo $v['diachi'];
                                }else{
                                    echo $v['diachikhac'];
                                }
                                ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['soluong']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo number_format($v['thanhtien'],0,"","."); ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['ngaylap']; ?>
                            </td>
                            
                            <td class = "text-center" >
                                <p>
                                <input type ="checkbox" name = "madon[]" value= "<?= $v['madon'];?>"/>
                                </p>
                            </td>

                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="box-footer">
                <?= $this->Form->button('Xác nhận', ['class' => 'btn btn-default']) ?>
                <?php
                    if(isset($_POST['Save'])&&$_POST['save']=="yes")
                ?>
             </div>

         <?= $this->Form->end(); ?>
</section> 
                            