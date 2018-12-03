<section class="content-header">
    <h1>
        Báo cáo bán hàng
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Quản lí tồn kho</li>
    </ol>
</section>

<section class="content">

<?php echo $this->Form->create() ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Quản lí tồn kho</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class="text-center">Tên kho</th> 
                        <th class = "text-center" >Địa chỉ</th>
                        <th class = "text-center" >SL sách nhập</th>
                        <th class = "text-center" >SL sách bán</th>
                        <th class = "text-center" >Tồn kho</th>
                        

                    </tr>
                </thead>
                 <tbody>
                        <?php 
                        $sttkho = 0;
                            foreach ($query as $v) {
                               // print_r($arr['0']);die;
                        ?>

                        <tr >
                        
                            <td class = "text-center" >    
                                <?= $this->Html->link($v['tenkho'], ['action' => 'chitiettonkho',$v->makho], ['escape' => false]) ?>  
                               
                            </td>
                             <td class = "text-center" >
                                <?php echo $v['diachi']; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v['SLsach_nhap']; ?>
                            </td>
                           <?php 
                            if (!$sach_kho[$sttkho]['sach_ban_kho']) {?>
                                 <td class = "text-center" >
                                <?php echo 0 ?>
                              
                            </td><?php
                            } else {?>
                                <td class = "text-center" >
                                <?php echo $sach_kho[$sttkho]['sach_ban_kho']; ?>
                              
                            </td><?php
                            }
                            ?>
                             
                            <?php
                            if (!$sach_kho[$sttkho]['sach_ban_kho']) {?>
                                 <td class = "text-center" >
                               <?php echo $v['SLsach_nhap']; ?>
                              
                            </td><?php
                            } else {?>
                                <td class = "text-center" >
                                <?php $sl = $v['SLsach_nhap']- $sach_kho[$sttkho]['sach_ban_kho'];
                                echo  $sl;?>
                              
                            </td><?php
                            $sttkho++;
                            }
                            ?>
                             
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <?= $this->Form->end(); ?>

</section> 
                            