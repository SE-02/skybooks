<section class="content-header">
    <h1>
        Quản lí sản phẩm
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Chi tiết sản phẩm</li>
    </ol>
</section>

<section class="content">

<?php echo $this->Form->create() ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết đơn hàng</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class="text-center" style="width: 150px;">Tên sách</th> 
                        <th class = "text-center" >Mô tả</th>
                        
                    </tr>
                </thead>
                 <tbody>
                        <?php 
                        
                            foreach ($query as $v) {
                              //print_r($query['madon']);die;
                        ?>

                        <tr >
                            <td class = "text-center" >
                                <?php echo $v['tensach']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['mota']; ?>
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
                            