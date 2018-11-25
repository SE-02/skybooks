<section class="content-header">
    <h1>
        Quản lí sách
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Thêm sách</li>
    </ol>
</section>

<section class="content">
<?php echo $this->Form->create($post,['type'=>'file']) ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm sách</h3>
        </div>
         
        <div class="box-body">
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('catalog_id', [
                    'type' => 'select',
                    'options'=> $list,
                    'label' => 'Danh mục sách',
                    'class' => 'form-control',
                    
                    'placeholder' => "Danh mục sách",
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('product_name', [
                    'type' => 'text',
                    'label' => 'Tên sách*',
                    'class' => 'form-control',
                    'placeholder' => "Tên sách",
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('input_price', [
                    'type' => 'text',
                    'label' => 'Giá nhập',
                    'class' => 'form-control',
                    'placeholder' => "Giá nhập",
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('price', [
                    'type' => 'text',
                    'label' => 'Giá bìa',
                    'class' => 'form-control',
                    'placeholder' => "Giá bìa",
                ])
                ?>
            </div>
             <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('discount', [
                    'type' => 'text',
                    'label' => 'Giảm giá(%)',
                    'class' => 'form-control',
                    'placeholder' => "Giảm giá(%)",
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('page_number', [
                    'type' => 'text',
                    'label' => 'Số trang',
                    'class' => 'form-control',
                    'placeholder' => "Số trang",
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('cover_type', [
                    'type' => 'text',
                    'label' => 'Loại bìa',
                    'class' => 'form-control',
                    'placeholder' => "Loại bìa",
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                
                <?=
                $this->Form->control('file', [
                    'type' => 'file',
                    'label' => 'Hình ảnh',
                    'class' => 'form-control',
                    'placeholder' => "Hình ảnh",
                ])
                ?>
            </div>
            
             <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('author', [
                    'type' => 'text',
                    'label' => 'Tác giả',
                    'class' => 'form-control',
                    'placeholder' => "Tác giả",
                ])
                ?>
            </div>
             <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('description', [
                    'type' => 'textarea',
                    'label' => 'Mô tả',
                    'class' => 'form-control',
                    'placeholder' => "Mô tả",
                ])
                ?>
            </div>
        </div>
        <div class="box-footer">
           
             <?= $this->Form->button(__('Tạo mới'),['class'=>'btn btn-primary'])?>
        </div>
        
        <?= $this->Form->end(); ?>
    </div>

</section> 