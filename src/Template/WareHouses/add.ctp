<section class="content-header">
    <h1>
        Quản lí kho
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Thêm kho mới</li>
    </ol>
</section>

<section class="content">
<?php echo $this->Form->create($warehouse) ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Tên kho</h3>
        </div>
         
        <div class="box-body">
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('wh_name', [
                    'type' => 'text',
                    'label' => 'Tên kho*',
                    'class' => 'form-control',
                    'placeholder' => "Tên kho",
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
            <h3 class="box-title">Danh sách kho</h3>
        </div>
         <table class="table table-bordered table-hover table-condensed table table-striped">
            <thead>
                <tr  role = "row" >
                    
                    <th class = "text-center" >Tên kho</th>
                    <th class = "text-center" >Thao tác</th>
                </tr>
            </thead>
            <tbody>
                 <?php foreach ($list as $v) { ?>
                    <tr>
                        <td class = "text-center" >
                            <?php echo $v->wh_name; ?>
                        </td>
                        <td class = "text-center" >
                           <?= $this->Html->link('<i class="fa fa-edit fa-lg"></i> &nbsp;', ['action' => 'edit',$v->wh_id], ['escape' => false]) ?>  
                           |    <?php
                        echo $this->Form->postLink('&nbsp; <i class="fa fa-trash fa-lg"></i>', ['action' => 'delete', $v->wh_id], ['confirm' => 'Bạn muốn xóa?','escape' => false]); ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
         </table>
        <?= $this->Form->end(); ?>
    </div>
</section> 