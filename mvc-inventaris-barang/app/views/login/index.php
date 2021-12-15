<section id="logo">
	<a href="#"><img src="<?= BASEURL ?>/img/logo.png" alt="Logo" width="260" /></a>
</section>

<section class="container">
	<div class="row mt-2">
		<div class="col-lg-12">
			<div class="mx-auto d-block" style="width: 30rem;">
			<?= Flasher::generalFlash(); ?>
			</div>
		</div>
	</div>
	<section class="row">
		<form method="post" action="<?= BASEURL; ?>/login/auth" role="login">
            <h4 class="text-center mb-4">LOGIN</h4>
		    <div class="form-group">
				<input type="text" name="username" placeholder="Masukkan username" required class="form-control" />
				<span class="glyphicon glyphicon-user"></span>
			</div>
			
			<div class="form-group">
				<input type="password" name="password" placeholder="Masukkan password" required class="form-control" />
				<span class="glyphicon glyphicon-lock"></span>
			</div>
			
			<button type="submit" class="btn btn-block btn-primary">Login</button>

			<div class="row">
				<p class="mx-auto d-block">Belum punya akun? <a href="<?= BASEURL; ?>/signin">Daftar disini</a></p>
			</div>
		</form>
	</section>
</section>