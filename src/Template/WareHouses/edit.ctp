
<section class="content-header">
    <h1>
        Sửa tên kho
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('<i class="fa fa fa-home"></i> Trang chủ', '/', ['escape' => false]) ?></li>
        <li class="active">Sửa tên kho</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa tên kho</h3>
        </div>
        <?= $this->Form->create($warehouse, ['type' => 'post']) ?>
        <div class="box-body">
            <div class="form-group col-sm-offset-1 col-sm-10">
                <?=
                $this->Form->input('wh_name', [
                    'type' => 'text',
                    'label' => 'Tên kho*',
                    'class' => 'form-control',
                    'value' => "$warehouse->wh_name"
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