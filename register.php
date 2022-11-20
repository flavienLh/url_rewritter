<?php require_once('./config/config.php');?>

<link rel="stylesheet" href="./css/login-register.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form action="inscription.php" class="register" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" id="username" name="username" class="login__input" placeholder="Username" autocomplete="off">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="email" id="email" name="email" class="login__input" placeholder="Email" autocomplete="off">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" id="password" name="password" class="login__input" placeholder="Password" autocomplete="off">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" id="repassword" name="repassword" class="login__input" placeholder="RePassword" autocomplete="off">
				</div>
				<button type="submit" class="button login__submit">
					<span class="button__text">register</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
                			
			</form>
            <form action="login.php">
            <button class="button login__submit" >
					<span class="button__text">log in</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
            </form>

            
			<div class="social-login">
				
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>