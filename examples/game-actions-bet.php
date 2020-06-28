<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-actions-bet.php 
	** Endpoint: game/actions/bet
	** Name: Game -> Bet 
	** Description: Provide an amount to bet.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/actions/bet';

################
# Declare $post array
################
$post=array();

$post['game_id']='';
$post['bot_id']='';
$post['amount']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_actions_bet($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/actions/bet` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		