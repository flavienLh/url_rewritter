<?php require_once('./config/config.php');


if(isset($_GET['login_err']))
{
    $err = htmlspecialchars($_GET['login_err']);
     switch($err)
    {
        case 'emailORpassword':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> mot de passe ou email incorrect
            </div>
        <?php
        case 'already':
        ?>
            <div class="alert alert-danger">
                <strong>Erreur</strong> compte non existant
            </div>
        <?php
        break;
    }
}
?>


<link rel="stylesheet" href="./css/login-register.css">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form action="connexion.php" class="login" method="POST">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" id="eamil" name="emailconnect" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" id="password" name="passwordconnect" class="login__input" placeholder="Password">
				</div>
				<button type="submit" name="connexion" class="button login__submit">
					<span class="button__text">Login </span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
            <form action="register.php">
            	<button class="button login__submit" >
					<span class="button__text">register</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
            </form>
			<a href="index.php" type="submit" name="connexion" class="button login__submit">
					<span class="button__text"> Home </span>
					<i class="button__icon fas fa-chevron-right"></i>
			</a>            
			<div class="social-login">
				<h3>login via</h3>
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