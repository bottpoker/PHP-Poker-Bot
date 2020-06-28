<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: bot-debug-log.php 
	** Endpoint: bot/debug-log
	** Name: Bot -> Bot Debug Log 
	** Description: The debug log gives you a run down on your hands played, how your bot reacted and what the results were. This log is provided to give you the means to understand how your bot is behaving when encountering certain scenarios.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='bot/debug-log';

################
# Declare $post array
################
$post=array();

$post['game_id']='';

################
# EXECUTE using specific function within class
################

$result = $obj->bot_debug_log($post);

################
# EXECUTE using send(); Provide the name of the endpoint `bot/debug-log` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		