<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-actions-fold.php 
	** Endpoint: game/actions/fold
	** Name: Game -> Fold 
	** Description: Fold your current hand. If there is no bet to make it will `check` for you. You cannot fold hands when there is nothing to call.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/actions/fold';

################
# Declare $post array
################
$post=array();

$post['game_id']='';
$post['bot_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_actions_fold($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/actions/fold` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		