<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: bot-delete-bot.php 
	** Endpoint: bot/delete-bot
	** Name: Bot -> Delete Bot 
	** Description: Delete a bot from your account.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='bot/delete-bot';

################
# Declare $post array
################
$post=array();

$post['id']='10';

################
# EXECUTE using specific function within class
################

$result = $obj->bot_delete_bot($post);

################
# EXECUTE using send(); Provide the name of the endpoint `bot/delete-bot` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		