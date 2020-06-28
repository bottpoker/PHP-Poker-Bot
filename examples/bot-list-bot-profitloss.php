<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: bot-list-bot-profitloss.php 
	** Endpoint: bot/list-bot-profitloss
	** Name: Bot -> List Bot Profit and Loss (PNL) 
	** Description: A list is provided by `id` and `name` for you to understand your profit and loss of particular bots.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='bot/list-bot-profitloss';

################
# Declare $post array
################
$post=array();

$post['limit']='10';
$post['page']='1';

################
# EXECUTE using specific function within class
################

$result = $obj->bot_list_bot_profitloss($post);

################
# EXECUTE using send(); Provide the name of the endpoint `bot/list-bot-profitloss` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		