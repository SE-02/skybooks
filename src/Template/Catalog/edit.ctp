
<section class="content-header">
    <h1>
        Sửa danh mục
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Sửa danh mục</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa danh mục</h3>
        </div>
        <?= $this->Form->create($catalog, ['type' => 'post']) ?>
        <div class="box-body">
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->input('catalog_name', [
                    'type' => 'text',
                    'label' => 'Tên danh mục sách*',
                    'class' => 'form-control',
                    'value' => "$catalog->catalog_name"
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