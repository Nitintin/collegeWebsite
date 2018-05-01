<?php
include 'connection.inc.php';
include 'header.function.php';
?>
<header>
<ul>
	<li class="login">
		<?php
		if (!isset($_SESSION['ID'])) {
			echo "Please login to write comments";
			echo "<form class='login-form' method='POST' action='".getLogin($conn)."'>
			<input type='text' name='userid' placeholder='enter your user id'>
			<input type='password' name='password' placeholder='enter password'>
			<button type='submit' name='login-btn'>LOG IN</button>
			</form>
			";
		}
		?>
	</li>
	
	<li class="signup">
		<?php
			if(!isset($_SESSION['ID'])){
			echo "<form method='POST' action='".getSignup($conn)."'>
			<input type='text' name='name' placeholder='enter your name' required><br>
			<input type='text' name='userid' placeholder='enter your userid' required><br>
			<input type='password' name='password' placeholder='enter your password' required><br>
			<button type='submit' name='signup-btn'>SIGN UP</button><br>
			</form>";
		    }
		?>
			
	</li>

	<li class="logout">
		<?php
			if(isset($_SESSION['ID'])){	
			echo "You are logged in";
			echo "<form class='logout-form' method='POST' action='".getLogout($conn)."'>
			<button type='submit' name='logout-btn'>LOG OUT!</button>
			</form>";
			}
		?>
	</li>

</ul>
</header>

