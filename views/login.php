<div class="container">
	<div class="form_background">
		<div class="form_container">
			<h1 class="underlined">Sign In</h1>
			<form method="post" action="<?=$config->siteRoot."login"?>" name="loginform" id="loginform">
				<?php if(isset($_SESSION['locked'])):?>
					<p class="error"><?= $_SESSION['locked']?></p>
				<?php endif; ?>
				<?php if(isset($errors['login_error'])): ?>
					<p class="error"><?= $errors['login_error']; ?></p>
				<?php endif; ?>

				<label for="nuid">Username (NUID)</label>
					<input type="text" name="username" id="username" autofocus="autofocus" <?= !empty($_POST['username']) ? 'value="'.$_POST['username'].'"' : ""  ?> /> <br/>
				<label for="password">Password</label>
					<input type="password" name="password" id="password" /> <br/>
				<label for="remember" id="remember_label" >Keep me logged in?</label>
					<input type="checkbox" name="remember" id="remember" checked="checked" /> <br/>
					<input type="submit" name="login" class="submit" id="login" value="Sign In" />
			</form>
			<span class="forgot">
				<a id="forgot_user" href="<?=$config->siteRoot."forgot-username"?>">Forgot Username? </a>
				| <a id="forgot_pass" href="<?=$config->siteRoot."forgot-password"?>">Forgot Password?</a>
			</span>
		</div>
	</div>
	<div class="call_out">
		<h3 class="call_out_header">New Member?</h3>
		<p>Sign up now. It's free and only takes a few minutes to create a new account.</p>
		<a href="<?=$config->siteRoot."register"?>" class="submit_btn">Sign Up Now</a>
	</div>
</div>
