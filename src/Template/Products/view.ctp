<section class="content-header">
    <h1>
        Quản lí sản phẩm
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Thêm sản phẩm</li>
    </ol>
</section>

<section class="content">

<?php echo $this->Form->create($listProducts) ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Danh sách sản phẩm</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class = "text-center" >Tên danh mục</th> 
                        <th class = "text-center" >Tên sách</th>
                        <th class = "text-center" >Giá nhập</th>
                        <th class = "text-center" >Giá bìa</th>
                        <th class = "text-center" >Giảm giá(%)</th>
                        <th class = "text-center" >Hình ảnh </th>
                        <th class = "text-center" >Tác giả</th>
                       <!--  <th class = "text-center" >Mô tả</th> -->
                        <th class = "text-center" >Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr >
                            <?php 
                                foreach ($listProducts as $v) {
                            ?>
                            <td class = "text-center" >
                                <?php 
                                    foreach ($list_name_catalog as $value) {
                                        $name_catalog = $value;
                                    }
                                    echo $name_catalog;
                                ?>
                            </td>
                            <td class = "text-center" >
                                <?= $this->Html->link($v->product_name, ['action' => 'chitietsanpham',$v->product_id], ['escape' => false]) ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v->input_price; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v->price; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v->discount; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $this->Html->image($v->image_link, array('width'=>'80px')) ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v->author; ?>
                            </td>
                            <!-- <td class = "text-center" >
                                <?php //echo $v->description; ?>
                            </td> -->
                            <td class = "text-center" >
                               <?= $this->Html->link('<i class="fa fa-edit fa-lg"></i> &nbsp;', ['action' => 'edit',$v->product_id], ['escape' => false]) ?>  
                               |    <?php
                                echo $this->Form->postLink('&nbsp; <i class="fa fa-trash fa-lg"></i>', ['action' => 'delete',$v->product_id], ['confirm' => 'Bạn muốn xóa?','escape' => false]);
                                ?>
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