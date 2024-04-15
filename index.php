<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

?>

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

		$(document).ready(function() {
		$("#roblox-id").submit(function(event) {
			event.preventDefault();
			document.getElementById("roblox_submit_button_id").disabled = true;
			var textbox = $("#roblox_text_box_id").val();
			var submit = $("#roblox_submit_button_id").val();
			//var data = "string";
			$("#rbx-text").load("loading-circle.php");
			$("#rbx-text").load("roblox-user-checker.php", {
				textbox: textbox,
				submit: submit
				//data: data
			});
			$("#rbx-info-link").load("link.php", {
				textbox: textbox,
				submit: submit
			});
			$("#rbx-info-text").load("text.php", {
				textbox: textbox,
				submit: submit
			});
		});
	});


</script>



</head>
<body>
  <div>
   <?php //<a id="myAnchor" href="http://www.stackoverflow.com">StackOverflow</a> ?>
  </div>
<script type="text/JavaScript">

  //var myAnchor = document.getElementById("myAnchor");
  //var mySpan = document.createElement("span");
  //mySpan.innerHTML = "replaced anchor!";
  //myAnchor.parentNode.replaceChild(mySpan, myAnchor);

  //var checker = document.getElementById("checker");
 //var mydiv = document.createElement("div");
  //mydiv.id = "box";
  //checker.parentNode.replaceChild(mydiv, checker)

  var Roblox = document.getElementById("Roblox")
  var Instagram = document.getElementById("Instagram")
  var Twitter = document.getElementById("Twitter")
  var Snapchat = document.getElementById("Snapchat")
  var Facebook = document.getElementById("Facebook")
 
  Roblox.innerHTML = "";
  Instagram.innerHTML = "";
  Twitter.innerHTML = "";
  Snapchat.innerHTML = "";
  Facebook.innerHTML = "";

//prevent "confirm resubmition" on refresh
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>


<?php $note_text = "Note: This only works for roblox atm*"; ?>

<div class="checker"></div>


<form class="roblox-class" id="roblox-id" action="" method="POST">
	<h2 id="roblox-title">Roblox name checker v1.1</h2>
	<p id="rbx-text" class="rbx-text-class" type="text">Enter a roblox username below</p>
	<b id="note-text"><?php echo $note_text; ?></b>
	<button type="button" class="rbx-info" onclick="rbx_info()" name="Info">Info</button>
		<style> 

			.rbx-info {
				position: absolute;
				right: 10px;
				text-align: center;
				top: 10px;
				width: auto;
				color: black;
				background-color: transparent;

			}

			.rbx-info:hover {
				color: black;
				background-color: transparent;


			}

			#note-text {
				position: absolute;
				color: white;
				margin: auto;
			 	width: 100%;
			 	text-align: center;
			 	bottom: 425px;
			 }

			.roblox-class {
				position: absolute;
				top: 600px;
			 	right: 10px;
			 	bottom: 400px;
			  	left: 10px;
				margin: auto;
				background-color: white;
			  	width: 700px;
			  	height: 400px;
			  	border: 30px
			  	padding: 10px;
			  	border-radius: 10px;
			  	opacity: 0.8;
			}

			#roblox-title {
				text-align: center;
				padding: 30px;
				color: #4b4b4b;
				opacity: 1.5;
			}

			#rbx-text {
				text-align: center;
				padding: 0px;
				font-weight: 700;
			}

			#roblox-input {
				text-align: center;
				padding: 0px;

			}

			#roblox_text_box_id {
				width: 500px;
			}

			#roblox_submit_button_id {
				height: 50px;
				width: auto;
				border-size: 3px;
				border-radius: 5px;
				text-align: center;
				background-color: #EE4436;
			}




		</style>

		<div id="roblox-input">
			<input class="roblox_text_box_class" id="roblox_text_box_id" type="text" name="rbxtextbox" style="font-size: 18pt" minlength = "3" maxlength="20" placeholder="Enter a roblox username">
			<br> 
			<br>
			<input class="roblox_submit_button_class" id="roblox_submit_button_id" type="submit" name="submit" value="GO">
		</div>

</form>

<form class="rbx-info-class" id="rbx-info-id" action="" method="POST">

	<h2 id="rbx-info-title">Information</h2>
	<br>
	<h5 id="rbx-info-link" type="text"><?php echo $link; ?>. . .</h5>
	<br>
	<h6 id="rbx-info-text" type="text"><?php echo $raw_text; ?>. . .</h6>
	<b id="note-text"><?php echo $note_text; ?></b>
	<button type="button" class="rbx-info-close" onclick="rbx_info_close()" name="rbx-info-close">&times;</button>
		<style>

			.rbx-info-close {
				position: absolute;
				right: 15px;
				text-align: center;
				top: 0px;
				width: auto;
				color: black;
				background-color: transparent;
				font-size: 30px;
  				font-weight: bold;
			}

			.rbx-info-close:hover {
				color: black;
				background-color: transparent;


			}

			.rbx-info-class {
				position: absolute;
				top: 600px;
			 	right: 250px;
			 	bottom: 400px;
			  	left: 250px;
				margin: auto;
				background-color: white;
			  	width: 700px;
			  	height: 400px;
			  	border: 30px
			  	padding: 10px;
			  	border-radius: 10px;
			  	opacity: 0.8;
			}

			#rbx-info-title {
				text-align: center;
				padding: 30px;
				color: #4b4b4b;
				opacity: 1.5;
			}

			#rbx-info-text {
				text-align: center;
				padding: 0px;
				color: #4b4b4b;
			}

			#rbx-info-link {
				text-align: center;
				padding: 0px;
				color: #4b4b4b;
			}

		</style>

</form>

<form class="insta-class" id="insta-id">

	<h2 id="insta-title">Instagram name checker</h2>
	<br>
	<br>
	<h3 id="insta-text" type="text">Coming Soon . . .</h3>
	<b id="note-text"><?php echo $note_text; ?></b>
		<style>

			.insta-class {
				position: absolute;
				top: 600px;
			 	right: 250px;
			 	bottom: 400px;
			  	left: 250px;
				margin: auto;
				background-color: white;
			  	width: 700px;
			  	height: 400px;
			  	border: 30px
			  	padding: 10px;
			  	border-radius: 10px;
			  	opacity: 0.8;
			}

			#insta-title {
				text-align: center;
				padding: 30px;
				color: #4b4b4b;
				opacity: 1.5;
			}

			#insta-text {
				text-align: center;
				padding: 0px;
				color: #4b4b4b;
			}

		</style>

</form>

<form class="twtr-class" id="twtr-id">

	<h2 id="twtr-title">Twitter name checker</h2>
	<br>
	<br>
	<h3 id="twtr-text" type="text">Coming Soon . . .</h3>
	<b id="note-text"><?php echo $note_text; ?></b>
		<style> 

			.twtr-class {
				position: absolute;
				top: 600px;
			 	right: 250px;
			 	bottom: 400px;
			  	left: 250px;
				margin: auto;
				background-color: white;
			  	width: 700px;
				height: 400px;
			  	border: 30px
			  	padding: 10px;
			  	border-radius: 10px;
			  	opacity: 0.8;
			}

			#twtr-title {
				text-align: center;
				padding: 30px;
				color: #4b4b4b;
				opacity: 1.5;
			}

			#twtr-text {
				text-align: center;
				padding: 0px;
				color: #4b4b4b;
			}

		</style>

</form>

<form class="snap-class" id="snap-id">

	<h2 id="snap-title">Snapchat name checker</h2>
	<br>
	<br>
	<h3 id="snap-text" type="text">Coming Soon . . .</h3>
	<b id="note-text"><?php echo $note_text; ?></b>
		<style> 

			.snap-class {
				position: absolute;
				top: 600px;
			 	right: 250px;
			 	bottom: 400px;
			  	left: 250px;
				margin: auto;
				background-color: white;
			  	width: 700px;
				height: 400px;
			  	border: 30px
			  	padding: 10px;
			  	border-radius: 10px;
			  	opacity: 0.8;
			}

			#snap-title {
				text-align: center;
				padding: 30px;
				color: #4b4b4b;
				opacity: 1.5;
			}

			#snap-text {
				text-align: center;
				padding: 0px;
				color: #4b4b4b;
			}

		</style>

</form>

<form class="faceb-class" id="faceb-id">

	<h2 id="faceb-title">Facebook name checker</h2>
	<br>
	<br>
	<h3 id="faceb-text" type="text">Coming Soon . . .</h3>
	<b id="note-text"><?php echo $note_text; ?></b>
		<style> 

			.faceb-class {
				position: absolute;
				top: 600px;
			 	right: 250px;
			 	bottom: 400px;
			  	left: 250px;
				margin: auto;
				background-color: white;
			  	width: 700px;
				height: 400px;
			  	border: 30px
			  	padding: 10px;
			  	border-radius: 10px;
			  	opacity: 0.8;
			}

			#faceb-title {
				text-align: center;
				padding: 30px;
				color: #4b4b4b;
				opacity: 1.5;
			}

			#faceb-text {
				text-align: center;
				padding: 0px;
				color: #4b4b4b;
			}

		</style>

</form>

<script>

function rbx_show() {

document.getElementById("roblox-id").style.display = '';
document.getElementById("roblox-title").style.display = '';
document.getElementById("rbx-text").style.display = '';
document.getElementById("roblox_text_box_id").style.display = '';
document.getElementById("roblox_submit_button_id").style.display = '';
}

function rbx_hide() {

document.getElementById("roblox-id").style.display = 'none';
document.getElementById("roblox-title").style.display = 'none';
document.getElementById("rbx-text").style.display = 'none';
document.getElementById("roblox_text_box_id").style.display = 'none';
document.getElementById("roblox_submit_button_id").style.display = 'none';
}

function ins_show() {

document.getElementById("insta-id").style.display = '';
document.getElementById("insta-title").style.display = '';
document.getElementById("insta-text").style.display = '';

}

function ins_hide() {

document.getElementById("insta-id").style.display = 'none';
document.getElementById("insta-title").style.display = 'none';
document.getElementById("insta-text").style.display = 'none';

}

function twr_show() {

document.getElementById("twtr-id").style.display = '';
document.getElementById("twtr-title").style.display = '';
document.getElementById("twtr-text").style.display = '';

}

function twr_hide() {

document.getElementById("twtr-id").style.display = 'none';
document.getElementById("twtr-title").style.display = 'none';
document.getElementById("twtr-text").style.display = 'none';

}

function snp_show() {

document.getElementById("snap-id").style.display = '';
document.getElementById("snap-title").style.display = '';
document.getElementById("snap-text").style.display = '';

}

function snp_hide() {

document.getElementById("snap-id").style.display = 'none';
document.getElementById("snap-title").style.display = 'none';
document.getElementById("snap-text").style.display = 'none';

}

function fcb_show() {

document.getElementById("faceb-id").style.display = '';
document.getElementById("faceb-title").style.display = '';
document.getElementById("faceb-text").style.display = '';

}

function fcb_hide() {

document.getElementById("faceb-id").style.display = 'none';
document.getElementById("faceb-title").style.display = 'none';
document.getElementById("faceb-text").style.display = 'none';

}

function rbx_info_show() {

document.getElementById("rbx-info-id").style.display = '';
document.getElementById("rbx-info-title").style.display = '';
document.getElementById("rbx-info-text").style.display = '';

}

function rbx_info_hide() {

document.getElementById("rbx-info-id").style.display = 'none';
document.getElementById("rbx-info-title").style.display = 'none';
document.getElementById("rbx-info-text").style.display = 'none';

}

//BUTTONS------------------------------------------------------------------------------------------------------------------------------

ins_hide();
twr_hide();
snp_hide();
fcb_hide();
rbx_info_hide();
//robloxMenu.classList.remove("roblox-class");

function rbx_info_close() {

rbx_info_hide();

rbx_show();

}

function rbx_info(){

rbx_hide();

rbx_info_show();

}

function rbxbtn() {

ins_hide();
twr_hide();
snp_hide();
fcb_hide();
rbx_info_hide();

rbx_show();

}

function insbtn() {

rbx_hide();
twr_hide();
snp_hide();
fcb_hide();
rbx_info_hide();

ins_show();
}

function twrbtn() {

rbx_hide();
ins_hide();
snp_hide();
fcb_hide();
rbx_info_hide();

twr_show();

}

function snpbtn() {

rbx_hide();
ins_hide();
twr_hide();
fcb_hide();
rbx_info_hide();

snp_show();

}

function fcbbtn() {

rbx_hide();
ins_hide();
twr_hide();
snp_hide();
rbx_info_hide();

fcb_show();

}

</script>
</body>
</html>

<style type="text/css">
	<?php //box?>

	#Roblox {
		margin: auto;
		background-color: #EE4436;
		width: 120px;
		height: 5px;
		padding: 5px;
		border-radius: 10px;
		text-align: center;
		cursor: default;
	}

	#Instagram {
		margin: auto;
		background-color: #EE36B9;
		width: 145px;
		height: 5px;
		padding: 5px;
		border-radius: 10px;
		text-align: center;
		cursor: default;
	}

	#Twitter {
		margin: auto;
		background-color: #30CBF4;
		width: 125px;
		height: 5px;
		padding: 5px;
		border-radius: 10px;
		text-align: center;
		cursor: default;
	}

	#Snapchat {
		margin: auto;
		background-color: #EEE036;
		width: 135px;
		height: 5px;
		padding: 5px;
		border-radius: 10px;
		text-align: center;
		cursor: default;
	}

	#Facebook {
		background-color: #3665EE;
		margin: auto;
		width: 140px;
		height: 5px;
		padding: 5px;
		border-radius: 10px;
		text-align: center;
		cursor: default;
	}


	<?php //top row text (roblox to facebook)?>
	<?php //ROBLOX?>
	#Roblox-name {
		text-align: center;
		background-color: transparent;

	}

	#Roblox-name:hover {
		background-color: transparent;


	}
	<?php //INSTAGRAM?>
	#Instagram-name {
		text-align: center;
		background-color: transparent;


	}

	#Instagram-name:hover {
		background-color: transparent;


	}
	<?php //TWITTER?>
		#Twitter-name {
		text-align: center;
		background-color: transparent;

	}

	#Twitter-name:hover {
		background-color: transparent;


	}
	<?php //SNAPCHAT?>
		#Snapchat-name {
		text-align: center;
		background-color: transparent;

	}

	#Snapchat-name:hover {
		background-color: transparent;


	}
	<?php //FACEBOOK?>
		#Facebook-name {
		text-align: center;
		background-color: transparent;

	}

	#Facebook-name:hover {
		background-color: transparent;


	}

	<?php //bottom row text (roblox to facebook)?>

	#hmm:hover {
		text-align: center;
		background-color: red;

	}

	.checker {
		color: white;
		text-align: center;
		margin: auto;
	}

</style>