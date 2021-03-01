<?php

require_once("config.php");

?>
<!DOCTYPE html>
<?php?>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?php echo $Favicon; ?>" type="image/x-icon">
  <title><?php echo $Title ?></title>  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.min.css">
  <link rel="stylesheet" href="inc/bootstrap.min.css">
  <link rel="stylesheet" href="inc/bootstrap-multiselect.css">
  <link rel="stylesheet" href="inc/style.css">
  <link rel="stylesheet" href="inc/table.css">
  <script src="inc/jquery.min.js"></script>
</head>
<body>
	<script src="https://cdn.jsdelivr.net/gh/leonardosnt/mc-player-counter/dist/mc-player-counter.min.js"></script>
	<style>
	body::-webkit-scrollbar-track
	{
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		border-radius: 10px;
		background-color: #F5F5F5;
	}

	body::-webkit-scrollbar
	{
		width: 6px;
		background-color: #F5F5F5;
	}

	body::-webkit-scrollbar-thumb
	{
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		background-color: #555;
	}
	
	.cid-qXJWQJ0YYc {
	  background-image: url("<?php echo $Background_img; ?>");
	}
	</style>
	<section class="header12 cid-qXJWQJ0YYc mbr-fullscreen mbr-parallax-background" id="header12-3">
	<!-- STYLE | here 
	
	>>> This is the effect over your background <<<
	How to Disable? Delete the style of this DIV
	
	-->
	<div class="mbr-overlay" style="opacity: 0; background-color: rgb(15, 118, 153);">
    </div>
    <div style="text-align:center;margin:auto;max-width:900px;">
    	<h1 style="font-family: 'Comic Sans MS';opacity: 0.8; width: 100%;max-width: 750px;color: #0099cc;font-size: 400%;font-weight: 700;line-height: 1.2;letter-spacing: 4px;margin: 0px auto 40px auto;">PensieroQuadrato </h1>
    	<h2 style="margin-bottom: 70px;opacity: 0.8;font-family: 'Comic Sans MS';"><span data-playercounter-ip="MC.PENSIEROQUADRATO.IT">0</span> players online</h2>
    	<ul style="list-style:none;padding-left:0px;">
    		<li><a href="https://skyblockpuro.forumfree.it/" target="blank"><img src="img/forum.png"></a></li>
    		<li><a href="http://buy.pensieroquadrato.it/" target="blank"><img src="img/shop.png"></a></li>
    		<li><a href="https://www.minecraft-italia.it/server/pensieroquadrato" target="blank"><img src="img/vota.png"></a></li>
    	</ul>
    	<ul style="list-style: none; padding-left: 0px;">
    		<li><a href="https://discord.gg/VNKZg9g" target="blank"><img src="img/discord.png"></a></li>
    		<li><a href="https://bit.ly/server-instagram" target="blank"><img src="img/instagram.png"></a></li>
    	</ul>
    	<a href="mailto:skyblockpuro@gmail.com?subject=Supporto%20SkyBlock/Vanilla"><button id="button">Contatta il Founder</button></a>
    	<style>
    		li {display: inline-block; width: 25%;}
    		img {width: 90%;opacity: 0.7;}
    		img:hover {opacity: 1;}
    		#button {background-color: #67AD5B;border: none;color: white;padding: 15px 28px;text-align: center;text-decoration: none;border-radius: 6px;margin-top: 0;margin: 70px 0 20px 0;font-size: 16px;transition: transform .5s}
			#button:hover {background-color: #81BB77; transform: scale(1.4)}
    	</style>
    </div>	
</body>  
</html>