<?php
/**
 * Created by PhpStorm.
 * User: ANSARI
 * Date: 1/22/2019
 * Time: 5:16 AM
 */

function showNavbar()
{
 //   !--new navbar responsive-->
?><nav class='navbar navbar-expand-lg navbar-dark bg-dark' >
	<a class='navbar-brand' href = './index.php' > Gracias</a >
	<button class='navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarSupportedContent' aria - controls = 'navbarSupportedContent' aria - expanded = 'false' aria - label = 'Toggle navigation' >
		<span class='navbar-toggler-icon' ></span >
	</button >
	<div class='collapse navbar-collapse' id = 'navbarSupportedContent' >
		<ul class='navbar-nav mr-auto' >
			
			<li class='nav-item' >
				<a class='nav-link' href = './contactus.php' > Contact Us </a >
			</li >
			<li class='nav-item' >
				<a class='nav-link' href = './aboutus.php' > About Us </a >
			</li >
			<li class='nav-item' >
				<a class='nav-link ' href = './login.php' > Login</a >
			</li >
			<li class='nav-item' >
				<a class='nav-link' href = './register.php' > Register</a >
			</li >
			<li class='nav-item' >
				<a class='nav-link' href = './forgotpassword.php' > Forgot Password </a >
			</li >

            <li class='nav-item' >
                <a class='nav-link' href = './admin/adminLogin.php' > Admin</a >
            </li >
		</ul >
		<form class='form-inline my-2 my-lg-0' >
			<input class='form-control mr-sm-2' type = 'search' placeholder = 'Search' aria-label = 'Search' >
			<button class='btn btn-outline-success my-2 my-sm-0' type = 'submit' > Search</button >
		</form >
	</div >
</nav >
<?php }?>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>