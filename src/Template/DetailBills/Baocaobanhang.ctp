<section class="content-header">
    <h1>
        Báo cáo bán hàng
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Báo cáo bán hàng</li>
    </ol>
</section>

<section class="content">

<?php echo $this->Form->create($query) ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Danh sách bán hàng</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class = "text-center" >Tháng/Năm</th> 
                        <th class = "text-center" >Tổng đơn hàng</th>
                        <th class = "text-center" >Số lượng SP</th>
                        <th class = "text-center" >Tổng tiền</th>
                        <th class = "text-center" >Tiền lãi</th>

                    </tr>
                </thead>
                 <tbody>
                    
                        <tr >
                            <?php 
                                foreach ($query as $v) {
                            ?>
                            <td class = "text-center" >
                                <?php echo $v['thang'];?>
                            </td>
                             <td class = "text-center" >
                                <?php echo $v['tongdonhang']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['tongSp']; ?>
                            </td>
                             <td class = "text-center" >
                                <?php echo number_format($v['tongtien'],0,"","."); ?>
                            </td>
                             <td class = "text-center" >
                                <?php echo number_format($v['tienlai'],0,"","."); ?>
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
                            