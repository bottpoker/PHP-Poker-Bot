<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-actions-raise.php 
	** Endpoint: game/actions/raise
	** Name: Game -> Raise 
	** Description: Please review the [poker raising mechanics document](./RAISING-MECHANICS.md) for more information about how you should raise. In the event you raise more than you have, you will be marked as `allin`,

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/actions/raise';

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

$result = $obj->game_actions_raise($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/actions/raise` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		