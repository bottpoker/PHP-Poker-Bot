<?php

/*

	## BOTTPOKER.COM - PHP Example 2020 (MIT License https://github.com/bottpoker/API-Version-1/blob/master/LICENSE)
	
	** File: bot-register-bot.php 
	** Endpoint: bot/register-bot
	** Name: Bot -> Register Bot 
	** Description: Register a bot for usage. Bots cannot be used together in any other equity pools. Review [Bot estrictions](./BOT-RESTRICTIONS.md) for more information about acceptable practices. In the event you violate the terms and conditions your account will be suspended and any funds you earned during that period will be ceased and returned to the parties impacted.

We automatically block bots from being able to seat together in all equity types but `sandbox`. You can freely seat with other bots you have registered in `sandbox` `equity pools`, but you will be stopped from doing so in any other equity type.

We take every precaution to make sure that you will not accidently seat with another bot. It is `prohibited` and we take actions to prevent it from occuring. If you accidently try to `join a room`  where you already have another bot seated, it will simply reject and will not impact your standing within the system.

*/	
	
# Include the executium class
include './configuration.php';
include '../source/class.include.php';

# Declare your key and secret
$obj = new BottPoker(BOTTPOKER_KEY,BOTTPOKER_SECRET,BOTTPOKER_VERSION);

# 
$END='bot/register-bot';

################
# Declare $post array
################
$post=array();

$post['username']='';

################
# EXECUTE using specific function within class
################

$result = $obj->bot_register_bot($post);

################
# EXECUTE using send(); Provide the name of the endpoint `bot/register-bot` 
# NOTE: Commented out for this test to prevent a double send. The 
################

#$result = $obj->send($endpoint,$post,array());

################
## OUTPUT 
################

echo '<pre>'; 
	print_r($result);

?>		
		