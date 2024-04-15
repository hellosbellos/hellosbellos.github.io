<?php 


if (isset($_POST['submit'])) {

	$textbox = $_POST['textbox'];


	$link = "https://api.roblox.com/users/get-by-username?username=$textbox";

	echo $link;



















}
else {
	echo "There was an error";
}

 ?>