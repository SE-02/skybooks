<section class="content-header">
    <h1>
        Quản lí danh mục sách
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Tạo danh mục sách</li>
    </ol>
</section>

<section class="content">
<?php echo $this->Form->create($catalog) ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo danh mục sách</h3>
        </div>
         
        <div class="box-body">
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('catalog_name', [
                    'type' => 'text',
                    'label' => 'Tên danh mục sách*',
                    'class' => 'form-control',
                    'placeholder' => "Tên danh mục sách",
                ])
                ?>
            </div>
        </div>
        <div class="box-footer">
           
             <?= $this->Form->button(__('Tạo mới'),['class'=>'btn btn-primary'])?>
        </div>
        
        <?= $this->Form->end(); ?>
    </div>
     <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Danh sách danh mục</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
                <thead>
                    <tr  role = "row" >
                        <th class = "text-center" >Mã danh mục</th>
                        <th class = "text-center" >Tên danh mục</th>
                        <th class = "text-center" >Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($list as $v) {
                    ?>
                        <tr >
                            <td class = "text-center">
                               <?php echo $v->catalog_id; ?>
                            </td>
                            <td class = "text-center" >
                                <?php echo $v->catalog_name; ?>
                            </td>
                            <td class = "text-center" >
                               <?= $this->Html->link('<i class="fa fa-edit fa-lg"></i> &nbsp;', ['action' => 'edit',$v->catalog_id], ['escape' => false]) ?>  
                               |    <?php
                            echo $this->Form->postLink('&nbsp; <i class="fa fa-trash fa-lg"></i>', ['action' => 'delete', $v->catalog_id], ['confirm' => 'Bạn muốn xóa?','escape' => false]);
                       
                        ?>
                            </td>
                        </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        
       
        
        <?= $this->Form->end(); ?>
    </div>
</section> 