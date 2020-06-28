<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: bot-list-my-bots.php 
	** Endpoint: bot/list-my-bots
	** Name: Bot -> List My Bots 
	** Description: List all available bots on your account. Consult this list when you are deleting, or applying a bot to an endpoint such as `game/poker/join`.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='bot/list-my-bots';

################
# Declare $post array
################
$post=array();

$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->bot_list_my_bots($post);

################
# EXECUTE using send(); Provide the name of the endpoint `bot/list-my-bots` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		