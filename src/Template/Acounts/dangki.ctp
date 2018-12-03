<!DOCTYPE html>
<html>
<head>
<title>Tạo tài khoản</title>

</head>
<body>
<div class="offer">
	<button class="close">
		<i class="icons-close">X</i>
	</button>
	<div class="offer-left">
		<nav>
			<h2>Tạo tài khoản</h2>
			<p>
				Tạo tài khoản để theo dõi đơn hàng, lưa
				<br>
				danh sách sản phẩm yêu thích, nhận
				<br>
				nhiều ưu đãi hấp dẫn.
			</p>
			<img src="/img/login.PNG">
		</nav>
	</div>
	<div class="offer-right"> 
		<div class="tab">
		<a class="tab-item" href="/login">Đăng nhập</a>
		<a class="tab-item active">Tạo tài khoản</a>
		</div>
		<div class="login">
		<?php echo $this->Form->create() ?>
			<?= $this->Form->control('fullname',['type'=>'text','label'=>'Họ tên:','class'=>'dangki1 d1','placeholder'=>"Nhập họ tên",]) ?>
			

			<?= $this->Form->control('email1',['type'=>'text','label'=>'Email:','class'=>'','placeholder'=>"Nhập địa chỉ email",]) ?>

			<?= $this->Form->control('phone',['type'=>'text','label'=>'SĐT:','class'=>'dangki1 d3','placeholder'=>"Nhập số điện thoại",]) ?>

			<?= $this->Form->control('password',['type'=>'password','label'=>'Mật khẩu:','class'=>'dangki1 d4','placeholder'=>"Mật khẩu từ 6 đến 32 kí tự",]) ?>

			<?= $this->Form->control('address',['type'=>'text','label'=>'Địa chỉ::','class'=>'dangki1 d5','placeholder'=>"Nhập địa chỉ",]) ?>

			

			<div class="dieukhoan">
			<input class="checkbox" type="checkbox" name="dongy"><label> Khi bạn nhấn Đăng kí, bạn đã đồng ý thực hiện mọi giao<br>dịch mua bán theo điều khoản và chính sách của SkyBooks.</label></input>
			</div>

			<div class="group">
				<?= $this->Form->button(__('Tạo tài khoản'),['type'=>'submit','class'=>'dangki-submit'])?>	
			</div>	
		<?= $this->Form->end() ?>	
		</div>
	</div>
</div>
</div>
</body>
</html>

