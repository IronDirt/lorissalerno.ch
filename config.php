<?php
#  __  __                                     __  __             __              
# /\ \/\ \                                   /\ \/\ \           /\ \__           
# \ \ \_\ \      __    _ __    ___    __  _  \ \ \ \ \    ___   \ \ ,_\     __   
#  \ \  _  \   /'__`\ /\`'__\ / __`\ /\ \/'\  \ \ \ \ \  / __`\  \ \ \/   /'__`\ 
#   \ \ \ \ \ /\  __/ \ \ \/ /\ \L\ \\/>  </   \ \ \_/ \/\ \L\ \  \ \ \_ /\  __/ 
#    \ \_\ \_\\ \____\ \ \_\ \ \____/ /\_/\_\   \ `\___/\ \____/   \ \__\\ \____\
#     \/_/\/_/ \/____/  \/_/  \/___/  \//\/_/    `\/__/  \/___/     \/__/ \/____/
#
# Developed by xSavior_of_God
#   ©Copyright 2018-2020 HeroxVote - All Rights Reserved -
#
# Example site: https://www.heroxwar.com/Heroxvotes/
# Server using this plugin mc.heroxwar.com
# SUPPORT Telegram: @xSavior_of_God
# SUPPORT Discord: @xSavior_of_God#2204
#
# Visage Render GitHub SourceCode https://github.com/unascribed-archive/Visage
#

# =======================================================
# ===============SYSTEM VARIABLES========================
# =======================================================
	
	setlocale(LC_TIME, "it_IT"); 
	$date = strftime("%B %G");
	$month = date('m');
	$mojang_api__nick_to_uuid = "https://playerdb.co/api/player/minecraft/";

# ============================================================================
# ===================================CONFIG===================================
# ============================================================================ 

	$ServerName = "PensieroQuadrato";
	# In which year was your server created?
	$Date_since = "2013"; # mine in 2018 :D
	# Custom title
	$Title = "PensieroQuadrato";
	# Your server ip
	$ServerIP = "mc.pensieroquadrato.it";
	# WebSite root
	$Website_root = "http://www.pensieroquadrato.it/";
	# Your server logo
	$Favicon = "https://www.pensieroquadrato.it/img/icon.png";
	# Background
	$Background_img = "http://www.pensieroquadrato.it/img/retro.png";
	
	# SKINS
		# Convert Player Name(%PLAYER_NAME%) to UUID?
		$convert_player_name_to_uuid = true;
		# Player Head IMG (top 3) | NEEDED %PLAYER_NAME%
		$HeadLink1 = "https://mc-heads.net/head/%PLAYER_NAME%/100.png";
		# Player Head IMG (top 10) | NEEDED %PLAYER_NAME%
		$HeadLink2 = "https://minotar.net/helm/%PLAYER_NAME%/30.png";
		# Player Bust IMG (search) | NEEDED %PLAYER_NAME% 
		#   Another Site https://minotar.net/armor/bust/%PLAYER_NAME%/100.png
		#   Another Site https://visage.surgeplay.com/bust/%PLAYER_NAME%
		#   Another Site https://www.heroxwar.com/Heroxvotes/render/index.php?uuid=%PLAYER_NAME%
		$HeadLink3 = "https://visage.surgeplay.com/bust/%PLAYER_NAME%";
		$Use_css = false; #Active only if you decide tu use css how rendering of the skins
		# Default SKIN UUID if mojang api no work or if user is SP (cracked)
		$Default_skin_uuid = array( 
			"3c116634-6976-4b47-9901-df425c152eb2",
			"91e882bf-2f8a-4fdb-b906-b76476ecdf75",
			"cb9003b9-f854-4b11-98ba-9df5da80fd1b",
			"22c95986-4165-416e-aaaa-724dc060e86b"
			);
		$Default_skin_name = array(
			"208sn",
			"1Hero_",
			"45Block",
			"bewq1"
		);
	
	# SNOW EFFECT 
	$snow_enabled = true; // if month is genuary or december or november i will use this skript \\
		# snow EFFECT link
	$snow_effect_link = "./inc/snoweffect.js";
	
	# Old post stile?
	$post_result_old_style = false;
	
	# Vote Web Sites
	$Websites = array(
		"Clicca per votare" => "https://minecraft-mp.com/server/258066/vote/",
	);
	
	# Players to be excluded from the top
	$ExcludedPlayer = array(
		"Notch",
		"creepypasta",
		"303",
		"Entity303",
		"Herobrine",
		"anonymous"
	);
	
# ============================================================================ 
# ===================================MYSQL==================================== 
# ============================================================================ 

	# The host address of your database
	$mysql_host = "localhost";
	# The username of your database
	$mysql_user = "root";
	# The password of your database
	$mysql_password = "fgG5r4gx";
	# The name of your database
	$mysql_db = "heroxvotes"; 

# ============================================================================ 
# ===================================LANG===================================== 
# ============================================================================ 

	$lang_title = "Top Votatori di $date";
	$lang_copy_ip = "Clicca per copiare il link";
	$lang_default_player = "IronDirt";
	$lang_anonymus = "Player";
	$lang_actual_votes = "%VOTE%";
	$lang_rank_1 = "<i class=\"fas fa-medal\" style=\"color: #ffb540; font-size: 4rem;\"></i>"; # or TEXT "#1"
	$lang_rank_2 = "<i class=\"fas fa-medal\" style=\"color: #8a9597; font-size: 3rem;\"></i>"; # or TEXT "#2"
	$lang_rank_3 = "<i class=\"fas fa-medal\" style=\"color: #cd7f32; font-size: 2rem;\"></i>"; # or TEXT "#3"
	$lang_search_placeholder = "Cerca";
	$lang_ipcopied = "IP COPIATO!";
	$lang_currently_votes = "Hai attualmente <b>%VOTES%</b> voti.";
	$lang_warn_no_nickname = "Inseirire un nome valido!";
	$lang_warn_player_not_found = "Non ho trovato nessun player con quel nome!";
	$lang_votes = "Voti";
	$lang_hv = "HV";
	$lang_message_vote = "Ricorda che votando quotidianamente il server sosterrai la nostra comunità e riceverai ogni giorno un PREMIO!";
	$lang_loading = "Loading...";
	
# ============================================================================ 
# ============================================================================
?>