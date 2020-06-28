<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-list-game-player-actions.php 
	** Endpoint: game/list-game-player-actions
	** Name: Game -> List Game Player Actions 
	** Description: A complete list of actions available to you. This is an extention of the endpoints which provides more information about each action you can take and the use.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/list-game-player-actions';

################
# Declare $post array
################
$post=array();


/* The endpoint */

################
# EXECUTE using specific function within class
################

$result = $obj->game_list_game_player_actions($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/list-game-player-actions` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		