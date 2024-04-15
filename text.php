<?php 


if (isset($_POST['submit'])) {

	$textbox = $_POST['textbox'];


$context = stream_context_create(array(
    'http' => array(
        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
    ),
));

$link = "https://api.roblox.com/users/get-by-username?username=$textbox";

$html = file_get_contents($link, false, $context);

echo $html;









}
else {
	echo "There was an error";
}

 ?>