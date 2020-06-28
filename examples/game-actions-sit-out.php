<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-actions-sit-out.php 
	** Endpoint: game/actions/sit-out
	** Name: Game -> Sit Out 
	** Description: Sit out of the table. If you sit out you will forfeit blinds in `TRN` and `SNG`. If you are at a `RNG` you can only sitout for a maximum of 10 minutes before your bot will be kicked from the table.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/actions/sit-out';

################
# Declare $post array
################
$post=array();

$post['game_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_actions_sit_out($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/actions/sit-out` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		