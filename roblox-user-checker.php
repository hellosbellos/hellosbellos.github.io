
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php


// code
if (isset($_POST['submit'])) {
	//$textbox = "melonified";
	$textbox = $_POST['textbox'];
	//$data = $_POST['data'];

	//echo $data;

	$errorEmpty = false;
	$errorUser = false;

	//proxy link: https://www.my-proxy.com/free-proxy-list-$page-count.html

	//$curl = curl_init();

	//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0');
	//curl_setopt($curl, CURLOPT_URL, "https://www.my-proxy.com/free-proxy-list-1.html");


	//echo curl_exec($curl);

	//get roblox user
	//include('simple_html_dom.php'); //makes get html function work

	//$html = file_get_html("https://api.roblox.com/users/get-by-username?username=$textbox"); //don't forget about the variable $typename (change it to whatever)

	$context = stream_context_create(array(
    'http' => array(
        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
    ),
));

$link = "https://api.roblox.com/users/get-by-username?username=$textbox";

$html = file_get_contents($link, false, $context);



	if ($html == '{"success":false,"errorMessage":"User not found"}') {

	$Validation = 0;

	}
	
	else { 

	$Validation = 1;

	}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if (empty($textbox)) {
		echo "<span class='modal-error'>Please enter something</span>";
		$errorEmpty = true;
		?><script> var access = "false"; 
		document.getElementById("roblox_submit_button_id").disabled = false;
		</script><?php
	}
	elseif ($Validation == 0) {
		echo "<span class='modal-error'>This username has not been taken</span>";
		$errorUser = true;
		?><script> var access = "false"; 

		document.getElementById("roblox_submit_button_id").disabled = false;
		</script><?php
	}	

	else {
		echo "<span class='modal-success'>This username is taken</span>";
		?> <script>// location.replace("http://melonbucks.local/earn/"); 

			var access = "true";

     		
		document.getElementById("roblox_submit_button_id").disabled = false;

		</script> <?php
	}
}
else {
	echo "There was an error >:(";
	?><script>document.getElementById("roblox_submit_button_id").disabled = false;</script><?php
}

?>

<script>

	//box shadow//////////////////////////////////////////
	$("#roblox_text_box_id").removeClass("input-error");

	var errorEmpty = "<?php echo $errorEmpty; ?>";
	var errorUser = "<?php echo $errorUser; ?>";

	if(errorEmpty == true) {
		$("#roblox_text_box_id").addClass("input-error");
	}
	if(errorUser == true) {
		$("#roblox_text_box_id").addClass("input-error");
	}
	if(errorEmpty == false && errorUser == false) {
		$("#roblox_text_box_id").val("");
	}

</script>





<style>
	.modal-error {
		color: #EE4436;
	}

	.modal-success {
		color: #EE4436; <?php //green - #54FF7D, red - #EE4436?>
	}
	.input-error {
		box-shadow: 0 0 5px red;
	}
</style>