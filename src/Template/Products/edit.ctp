
<section class="content-header">
    <h1>
        Sửa sản phẩm
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Sửa sản phẩm</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa sản phẩm</h3>
        </div>
        
        <?php echo $this->Form->create($post,['type'=>'file']) ?>
        <div class="box-body">
             <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('catalog_id', [
                    'type' => 'select',
                    'options' => $list,
                    'label' => 'Tên danh mục sách',
                    'class' => 'form-control'
                    //'value' => "$product->product_id"
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('product_name', [
                    'type' => 'text',
                    'label' => 'Tên sách*',
                    'class' => 'form-control',
                    'value' => "$product->product_name"
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('input_price', [
                    'type' => 'text',
                    'label' => 'Giá nhập',
                    'class' => 'form-control',
                    'value' => "$product->input_price"
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('price', [
                    'type' => 'text',
                    'label' => 'Giá bìa',
                    'class' => 'form-control',
                    'value' => "$product->price"
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('discount', [
                    'type' => 'text',
                    'label' => 'Giảm giá(%)',
                    'class' => 'form-control',
                    'value' => "$product->discount"

                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('page_number', [
                    'type' => 'text',
                    'label' => 'Số trang',
                    'class' => 'form-control',
                    'value' => "$product->page_number"

                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('cover_type', [
                    'type' => 'text',
                    'label' => 'Loại bìa',
                    'class' => 'form-control',
                    'value' => "$product->cover_type"

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
                <?php 
                echo $this->Html->link($product->image_path); 
                ?>
                 
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('author', [
                    'type' => 'text',
                    'label' => 'Tác giả',
                    'class' => 'form-control',
                    'value' => "$product->author"
                ])
                ?>
            </div>
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->control('description', [
                    'type' => 'text',
                    'label' => 'Mô tả',
                    'class' => 'form-control',
                    'value' => "$product->description"
                ])
                ?>
            </div>
        </div>
        <div class="box-footer">
            <?= $this->Form->button(__('Cập nhật'),['class'=>'btn btn-primary'])?>
        </div>
        <?= $this->Form->end(); ?>
    </div>
</section>