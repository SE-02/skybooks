<!DOCTYPE html>
<html>
<head>
<title>Đăng nhập</title>

</head>
<body>
<div class="offer">
	<button class="close">
		<i class="icons-close">X</i>
	</button>
	<div class="offer-left">
		<nav>
			<h2>Đăng nhập</h2>
			<p>
				Đăng nhập để theo dõi đơn hàng, lưa 
				<br>
				sanh sách sản phẩm yêu thích, nhận 
				<br>
				nhiều ưu đãi hấp dẫn.
			</p>
			<img src="/img/login.PNG">
		</nav>
	</div>
	<div class="offer-right"> 
		<div class="tab">
		<a class="tab-item active">Đăng nhập</a>
		<a class="tab-item" href="/registration">Tạo tài khoản</a>
		</div>
		<div class="login">
			<div style="text-align: center; padding-right: 15px; color: red;"><?= $this->Flash->render() ?></div>
			<?php echo $this->Form->create() ?>
			<?= $this->Form->control('email',['type'=>'text','label'=>'Email','class'=>'','placeholder'=>"Nhập địa chỉ email",]) ?>

			<?= $this->Form->control('password',['type'=>'password','label'=>'Mật khẩu:','class'=>'dangki1 d1','placeholder'=>"Mật khẩu từ 6 đến 32 kí tự",]) ?>

			<div class="group">
				<p id="reset">Quên mật khẩu? Nhấn vào đây</p>
			</div>
			<div class="group">
				<?= $this->Form->button(__('Đăng nhập'),['type'=>'submit','class'=>'login-submit'])?>		
			</div>	
			<?= $this->Form->end() ?>
			<div class="group">
				<div id="login-submit1">
				<a title="Đăng nhập bằng Facebook" href="https://vi-vn.facebook.com/Skybooks.vn/">
				<span>Đăng nhập bằng Facebook</span>
				</a>
				</div>
			</div>
			<div class="group">
				<div id="login-submit2">
				<a title="Đăng nhập bằng Google" href="https://accounts.google.com">
				<span>Đăng nhập bằng Google</span>
				</a>
				<div>
			</div>
		</div>
	</div>
</div>
</body>
</html>