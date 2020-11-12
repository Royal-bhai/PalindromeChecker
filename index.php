<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-webkit-font-smoothing: antialiased;
			-moz-font-smoothing: antialiased;
			-o-font-smoothing: antialiased;
			font-smoothing: antialiased;
			text-rendering: optimizeLegibility;
			font-family: 'Josefin Sans', sans-serif;
		}
		body{
			font-family: "Roboto", "Helvetica", "Arial", sans-serif;
			font-weight: 100;
			font-size: 12px;
			line-height: 30px;
			color: #777;
			background: #4CAFF0;
		}
		.container{
			position: relative;
			width: 500px;
			height: auto;
			background: #fff;
			margin-top: 10%;
		}
		.container form{
			padding: 12px;
		}
		.container form h3{
			font-size: 35px;
			padding: 4px 12px 0px 0px;
			border-bottom: 1px solid lightgrey;
		}
		.container form h4{
			position: relative;
			padding: 5px 0px 10px 0px;
		}
		.container form textarea{
			width: 100%;
			font-size: 18px;
			padding: 10px;
			color: blue;
		}
		.container form button{
			font-size: 16px;
			width: 100%;
			color: #fff;
			background: #444;
			padding: 4px;
			border: none;	
		}
		.container form button:hover{ background-color: #333; }
		.container form p{
			text-align: center;
			font-size: 13px;
			padding: 5% 5% 0% 5%;
		}
	</style>
</head>
<body>
	<div class="container">
		<form id="contact" action="" method="post">
			<h3>Palindrome Checker</h3>
			<h4>
				<?php
					if(isset($_POST['submit'])){
						$word = $_POST['palin'];

						$rev_word = strrev($word);

						if($word === $rev_word){
							echo "Yes, $word is Palindrome";
						}else{
							echo "No, $word is not Palindrome";
						}
					}
				?>
			</h4>

			<fieldset>
				<textarea placeholder="Type your word..." name="palin" rows="3" required></textarea>
			</fieldset>
			<fieldset>
				<button name="submit" type="submit" id="contact-submit">Submit</button>
			</fieldset>
			<p class="copyright"><a href="palindrome.php" target="_blank" title="Colorlib">What is palindrome numeber ?</a><br>
			Designed by <a href="AboutUs.php" target="_blank" title="Colorlib">RightRoyalBhai</a></p>
		</form>
	</div>	
</body>
</html>