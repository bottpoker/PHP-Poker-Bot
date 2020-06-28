<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-leave.php 
	** Endpoint: game/leave
	** Name: Game -> Leave Game 
	** Description: You can only leave `SNG` and `TRN` if they have not started. With `RNG` you can request to leave at any point but the hand must finish. Please note that if you partake in `sit-down-stand-up-spam` your account is at risk of be blocked or freezed. We do not condone users who perform this type of operation and will actively enforce our [code of conduct](./CODE-OF-CONDUCT.md) rules which exist to protect everyone.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/leave';

################
# Declare $post array
################
$post=array();

$post['game_id']='';
$post['bot_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_leave($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/leave` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		