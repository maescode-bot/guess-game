<?php require_once 'Core/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php Links::headLinks();?>	
</head> 
<body>
	<div class="container">
		<div id="guess">
		<h1>Can you Guess?</h1>
		</div>
		<header>
				<div class="spinner-grow text-primary" role="status">
				 <span class="sr-only"></span>
				</div>
				<div class="spinner-grow text-secondary" role="status">
				  <span class="sr-only"></span>
				</div>
				<div class="spinner-grow text-success" role="status">
				  <span class="sr-only"></span>
				</div>
				<div class="spinner-grow text-danger" role="status">
				  <span class="sr-only"></span>
				</div>
				<div class="spinner-grow text-warning" role="status">
				  <span class="sr-only"></span>
				</div>
				<div class="spinner-grow text-info" role="status">
				  <span class="sr-only"></span>
				</div>
				<div class="spinner-grow text-success" role="status">
				  <span class="sr-only"></span>
				</div>
				<div class="spinner-grow text-warning" role="status">
				  <span class="sr-only"></span>
				</div>
		</header>
		<div>
			<div class="card text-center">
			  <div class="card-header">
			    Guess a Number between 1 and 10
			  </div>
			  <div class="card-body">
			  	<form method="post" action="index.php">
			  		<input type="text" name="guessno" class="form-control" placeholder="Your guess" id="guessno">
			  		<input type="submit" name="submit" class="form-control btn-success" value="Play" id="submit">
			  	</form>
			  </div>
			  <div class="card-footer text-muted">
			    <?php
			    	if(isset($_POST['submit']) && $_POST['submit'] ='Play')
 	 				{
 	 					Control::get();
 	 				}
			    ?>
			  </div>
			</div>
		</div>
	</div>
	<?php Links::bodyLinks();?>
</body>
</html>