<section class="content-header">
    <h1>
        Quản lí bình luận
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Quản lí bình luận</li>
    </ol>
</section>

<section class="content">

<?php echo $this->Form->create() ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Bình luận đã phê duyệt</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class="text-center">Số sao</th> 
                        <th class = "text-center" >Tên khách hàng</th>
                        <th class = "text-center" >Sản phẩm</th>
                        <th class = "text-center" >Bình luận</th>
        
                    </tr>
                </thead>
                 <tbody>
                        <?php 
                        
                            foreach ($query as $v) {
                              //print_r($query['madon']);die;
                        ?>

                        <tr >
                        
                            <td class = "text-center" >
                                <?php echo $v['sosao']; ?>
                            </td>
                             <td class = "text-center" >
                                <?php echo $v['khachhang']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['sanpham']; ?>
                            </td>                           
                            <td class = "text-center" >
                                <?php echo $v['binhluan']; ?>
                            </td>

                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

         <?= $this->Form->end(); ?>
</section> 
