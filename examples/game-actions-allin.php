<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-actions-allin.php 
	** Endpoint: game/actions/allin
	** Name: Game -> All-in 
	** Description: Place your bot all-in. All-in can occur automatically if you have less than a required blind when it comes to your turn.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/actions/allin';

################
# Declare $post array
################
$post=array();

$post['game_id']='';
$post['bot_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_actions_allin($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/actions/allin` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		