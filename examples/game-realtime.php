<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: game-realtime.php 
	** Endpoint: game/realtime
	** Name: Game -> Real-time Game Data 
	** Description: Real-time game data. Also see `websocket` information. Becareful when using this endpoint not to trigger rate limiting. This data provides all the current information about the games position. If you want to look at previous hands you should look at `game/list-previous-hands`.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='game/realtime';

################
# Declare $post array
################
$post=array();

$post['game_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->game_realtime($post);

################
# EXECUTE using send(); Provide the name of the endpoint `game/realtime` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		