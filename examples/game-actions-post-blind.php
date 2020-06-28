<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-actions-post-blind.php 
	** Endpoint: game/actions/post-blind
	** Name: Game -> Post Blind 
	** Description: Post the blinds before they come to you. Otherwise they will automatically post when it comes to you. This endpoint is usually only used when someone seats at a table for the first time or comes back from having sitted out.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/actions/post-blind';

################
# Declare $post array
################
$post=array();

$post['game_id']='';
$post['bot_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_actions_post_blind($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/actions/post-blind` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		