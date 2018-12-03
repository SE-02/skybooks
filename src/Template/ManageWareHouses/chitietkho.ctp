<section class="content-header">
    <h1>
        Quản lí kho hàng
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Chi tiết kho hàng</li>
    </ol>
</section>

<section class="content">

<?php echo $this->Form->create() ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết kho hàng</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class="text-center">Mã sách</th> 
                        <th class = "text-center" >Tên sách</th>
                        <th class = "text-center" >SL sách nhập</th>
        
                    </tr>
                </thead>
                 <tbody>
                       <?php
                            foreach ($query as $v) {
                              
                        ?>
                        <tr >                       
                            <td class = "text-center" >
                            <?php echo $v['masach'] ?>                              
                            </td>
                             <td class = "text-center" >
                                <?php echo $v['tensach']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['SLsach_nhap']; ?>
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
                            